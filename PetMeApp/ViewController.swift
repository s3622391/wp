//
//  ViewController.swift
//  PetMeApp
//
//  Created by Dina Mogilevsky on 24/7/19.
//  Copyright © 2019 Dina Mogilevsky. All rights reserved.
//

import UIKit
import FirebaseDatabase
import FirebaseAuth

class ViewController: UIViewController {
    //variables
    
    var databaseRef=FirebaseDatabase.Database.database().reference(fromURL: "https://petmeapp-1ebde.firebaseio.com/").root
    
    //outlets
    
    @IBOutlet weak var UserEmail: UITextField!
    
    @IBOutlet weak var UserPassword: UITextField!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
        
    }

    
    @IBAction func SignUp(_ sender: UIButton) {
        
        guard let email=UserEmail.text else{
                print("Invalid Email!")
                        return
        }
                        
        guard let password=UserPassword.text else{
                print("Invalid Password!")
                        return
        }
        
        FirebaseAuth.Auth.auth().createUser(withEmail: email, password: password){
                    (user, error) in if let error = error {print(error.localizedDescription)}
                    else{print("Success!" + Auth.auth().currentUser!.uid)
                        self.title = Auth.auth().currentUser!.email
                        self.openProfile()
                    }
                }
    
    }
    
    @IBAction func SignIn(_ sender: AnyObject) {
        
        //Sign Out
        /*do
            {
                try Auth.auth().signOut()
            }
            catch let error as NSError
            {
                print (error.localizedDescription)
            }
        */
        guard let email=UserEmail.text, let password=UserPassword.text else{return}
        
        Auth.auth().signIn(withEmail: email, password: password){
            (user, error) in if let error = error {print(error.localizedDescription)}
            else{print("Success!" + Auth.auth().currentUser!.uid)
                self.title = Auth.auth().currentUser!.email
                self.openProfile()
            }
        }
        
        //self.dismiss(animated: true, completion: nil)
        
        //checkConn()
        
        //openProfile()
    }
    
  
    func openProfile(){
        let userID = Auth.auth().currentUser?.uid
        if userID != nil{
            let storyboard = UIStoryboard(name: "Main", bundle: nil)
            let ProfileViewController = storyboard.instantiateViewController(withIdentifier: "Profile")
            present(ProfileViewController, animated: true, completion: nil)
        }else{
            self.title = "Not connected"
        }
    }
    
 
}


