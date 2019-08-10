//
//  ProfileViewController.swift
//  PetMeApp
//
//  Created by Dina Mogilevsky on 24/7/19.
//  Copyright © 2019 Dina Mogilevsky. All rights reserved.
//

import UIKit
import FirebaseAuth
import FirebaseDatabase
import FirebaseStorage
import FirebaseUI

class ProfileViewController: UIViewController, UIImagePickerControllerDelegate , UINavigationControllerDelegate{
    
    let storageRef = Storage.storage().reference()
    let databaseRef = Database.database().reference().child("Users")

    @IBOutlet weak var UserName: UITextField!
    
    @IBOutlet weak var PetURL: UIImageView!
    
    @IBOutlet weak var PetName: UITextField!
        
    @IBOutlet weak var PetMedRec: UITextField!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        if Auth.auth().currentUser?.uid == nil{
            logOut()
        }else{
        
        PetURL.layer.cornerRadius = PetURL.frame.size.width/2
        PetURL.clipsToBounds=true
        PetURL.setNeedsDisplay()
        //PetURL.setNeedsLayout()
        
        let userID = Auth.auth().currentUser?.uid
        databaseRef.child(userID!).observeSingleEvent(of: .value, with: { (snapshot) in
          // Get user value
          let value = snapshot.value as? NSDictionary
          let username = value?["UserName"] as? String ?? ""
          
          let petname = value?["PetName"] as? String ?? ""
            
          let petmedrec = value?["PetMedRec"] as? String ?? ""
            
          let peturl = value?["PetURL"] as? String ?? ""
            
            self.UserName.text = username
            self.PetName.text = petname
            self.PetMedRec.text = petmedrec
            // Create a reference to the file you want to download
            let islandRef = self.storageRef.child(peturl)
            let imageView: UIImageView = self.PetURL
            //imageView.setNeedsDisplay()
            let placeholderImage = UIImage(named: "logo-petme.png")
            imageView.sd_setImage(with: islandRef, placeholderImage: placeholderImage)

          }) { (error) in
            print(error.localizedDescription)
        }
        }
    }
    
    @IBAction func Save(_ sender: UIButton) {
        let userID = Auth.auth().currentUser?.uid ?? ""
        
        let username = UserName.text ?? ""
                  
        let petname = PetName.text ?? ""
                    
        let petmedrec = PetMedRec.text ?? ""
        
        var fullPath = ""
        
        let profileImageRef = storageRef.child("ProfileImages").child("\(userID)-profileImage.jpg")
        
        let uploadMetaData = StorageMetadata()
                    uploadMetaData.contentType = "image/jpeg"
        let imageData = PetURL.image?.jpegData(compressionQuality: 0.6)
        
        profileImageRef.putData(imageData!, metadata: uploadMetaData) { (uploadedImageMeta, error) in
                       
                       if error != nil
                       {
                           print("Error took place \(String(describing: error?.localizedDescription))")
                           return
                       } else {
                           
                        self.PetURL.image = UIImage(data: imageData!)
                        //fullPath="ProfileImages/" + userID + "-profileImage.jpg"
                           
                           print("Meta data of uploaded image \(String(describing: uploadedImageMeta))")
                       }
                   }
        if self.PetURL.image != nil{
            fullPath="ProfileImages/" + userID + "-profileImage.jpg"
        }
        guard let key = databaseRef.child(userID).key else { return }
        if username != "" || petname != ""{
            let user = ["UserName": username,
                        "PetName": petname,
                        "PetMedRec": petmedrec,
                        "PetURL": fullPath]
            let childUpdates = ["\(key)/": user]
            databaseRef.updateChildValues(childUpdates)
        }
    }
    
    
    @IBAction func LogOut(_ sender: UIButton) {
    
        logOut()
    }
    
    @IBAction func UploadImage(_ sender: UIButton) {
        let imagePicker = UIImagePickerController()
                imagePicker.delegate = self
                imagePicker.allowsEditing = true
        imagePicker.sourceType = UIImagePickerController.SourceType.photoLibrary
                self.present(imagePicker, animated: true, completion: nil)
        
    }
    
    func logOut(){
        let storyboard = UIStoryboard(name: "Main", bundle: nil)
        let LoginViewController = storyboard.instantiateViewController(withIdentifier: "Login")
        present(LoginViewController, animated: true, completion: nil)
        
    }
    
    func imagePickerController(_ picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [UIImagePickerController.InfoKey : Any]) {
        if let pickedImage = info[UIImagePickerController.InfoKey.originalImage] as? UIImage {
            PetURL.contentMode = .scaleAspectFit
            PetURL.image = pickedImage
        }
     
        dismiss(animated: true, completion: nil)
    }
    
    func imagePickerControllerDidCancel(_ picker: UIImagePickerController) {
        dismiss(animated: true, completion: nil)
    }

}
