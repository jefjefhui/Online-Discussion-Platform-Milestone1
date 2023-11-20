# Online-Discussion-Platform-Milestone1
This is the first milestone of the online discussion platform project. The PDF document is the project proposal, which includes the technical aspects, functionalities, UI/UX deisgns, potential difficulties and the project timeline. This repository also includes all the programming codes and the relevant files. In milestone 1, I developed some basic account features, the ask question feature, commenting feature, basic file upload, drag and drop, multi-upload, email verification and forgot password. Milestone 2 will introduce more functionalities of the discussion platform application.

Technologies I used in the development: HTML,CSS,JavaScript,Bootstrap,CodeIgniter(PHP framework),SQL,MySQL,phpMyAdmin

1.Basic account features: It means the application requires users to create an account before they use it. When creating the account, the users need to satisfy certain requirements for security and data intergiry purposes. Once they have successfully created their user account, they can use their users credentials to login their account and use the features on the discussion platform. 
Once you open the website, you will see this login page
![LoginMainPage](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/b9dfdc75-e6f6-45ab-8c87-550c9263357a)
Once you clicked on the "create account" link, you will see this.
![Create_Account_Page](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/901ee1e6-8b78-48ea-b630-7a0277cae5f2)
You cannot use a registered email to create an account. If you use a registered email to register, this will happen.
![EmailExist](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/f9d6cd0a-2898-44d8-bf48-a1be677417b7)
You cannot use a registered username to create an account. If you use a registered username, this will happen.
![UsernameExist](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/5c1fb29d-fff5-4c26-9b31-9b00c333b66e)
When creating your own password, you need to ensure your password has at least 5 characters.If not, this will happen.
![passwordTooShort](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/4ffec927-a66e-481d-9501-141815d60bc2)
You need to ensure your password contains upper case characters. Otherwise, this will happen.
![OneUpperMin](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/8d548638-4e34-41c4-a415-6973dabae5a0)
You need to ensure your password contains lower case characters as well. Otherwise, this will happen.
![OneLowerMin](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/8a9e37e3-2f46-4125-b90d-7a35d6771af9)
You need to ensure your password contains numerical values. Otherwise, this will happen.
![OneNumMin](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/c64c48fa-5a73-493e-a211-fd2686479639)
You need to ensure your password contains special characters as well. Otherwise, this will happen.
![OneSpecialChar](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/5e8e1c13-7cc8-43ed-98b6-697ba13a7455)
You need to ensure the CAPTCHA value is correct. Otherwise, this will happen.
![captcha_incorrect](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/6a11da16-1f64-467b-9292-3baa3203315a)
Once you satisfy all the requirements above, your account will be created successfully, and the following screen will be displayed.
![account_All_Set](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/8b98111e-ddd6-431e-859e-8f0776130c41)

Once you login to your account, you will see the home page of the application, which is shown as follow.
![HomeQ_page](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/0d50e081-cbce-4b97-bd83-77123056f4d3)

2. Ask Questions: This feature allows users to ask questions on the platform.
This is the ask questions interface
![askQuestion1](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/9f7705e4-72d8-4452-ba0e-2a80b6275680)
You can enter all the required information about the question, then press the "ask" button
![askQuestion2](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/655c4d3e-5c2f-4e30-98a5-78dfbf1378c6)
Once you posted your question successfully, it will show the success screen.
![askQuestion3](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/539bd3b9-05e2-4c91-b1a6-30c71dc3673b)
When you go back to the home screen, you can see the question posted at the bottom successfully
![askquestion4](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/1c66a41e-14e4-447f-91b5-ccbb502d9939)
You can also click on the questions, which will bring you in and show the replies on the question.
![askquestion5](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/10a0f5ff-0456-4459-964d-5a685591a712)

3. Commenting feature: This feature allows users to comment on questions, so that the entire community can help each other out.
You can type your response in the text box, just like the following image. Afterwards, just click on the submit button.
![comment1](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/13482b80-10f7-4b41-b322-400fe4228b3a)
After clicking on the submit button, the comment you just made will be posted at the bottom of the question. You can post more comments, and they will be placed at the bottom and stacking over other comments.This is how it looks like when you posted a comment on a question.
![comment2](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/c1e77073-2aa2-4cf7-ba10-d617494f0a21)

4. Basic file upload: When replying questions, text information may not sufficient. Sometimes, we need visual aid to help us to explain the question. Basic file upload allows user to upload an image when they reply questions. The usage of basic file upload is very simple. Users only need to press the "choose file" button, navigate to the image and choose the image. Once you choose the image to upload, it will show as follow.
![fileUpload1](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/547bbe01-8c67-4795-8cf2-f33e8c7c152e)
Once you clicked on the submit button, the comment and the imge will be posted under the question. The latest comment will be posted at the bottom.
![fileupload2](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/d3ca4c98-6938-4579-baa5-da675d3aff0d)

5. Drag and drop: Instead of selecting files to upload to the platform, drag and drop allows users to drag and drop the image they want to upload to a specific area in the website,which can replace the redundant process of selecting the file from the file system. This is a lot more convenient than selecting files form the file system, as users can drag and drop directly. This can prevent human errors during the image selection process. The following image shows how the drag and drop interface looks like.
![dragNDrop1](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/a86d7cb4-3ccd-4f01-98a5-4f0b1b1ce167)

The image below shows how the drag and drop process looks like. This image also shows how it looks like when the image is being dragged to the area successfully. Lastly, this image also shows the users can upload multiple items at the same time.
![dragNDrop2](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/ef8f3ebb-c4f9-468f-9c9e-9c1acb719eea)

6. Email verification and Forgot password: Email verification and forgot password are two important features which come together. Forgot password allows users to reset their password when they forgot. During the reset password procedures, the system will trigger the email verification step. It will generate a random 4 digits number and send it to the user's email address. Users need to check their email and type the 4 digits number to the website. After clicking on the "forgot password" link in the login home page. The following screen will show.
![forgot_PW](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/cb189f33-43db-4fed-b9bc-2e00bbdfb46d)
For this to work, you need to enter a real email address. The image below is an example.
![forgot_PW_entered](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/2cd8e022-0326-4d81-8188-95476e21e6a8)
After pressing the "submit" button, you will see the following screen. The system will ask for your verification code. You can get the verification code by checking your email.
![enter_Verification_code](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/5e999ee4-610e-486a-8260-f6e59af03751)
When you check your email, you can see the verification code, which is something like this.
![verificationCodeEmail](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/dfe9e7a5-4f16-4e41-9c84-5bb79836b0b0)
After getting the verification code from the email, you can enter it to the website. 
![entered_VerficationCode](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/1020bfd9-dae8-42c2-9dab-90288a86927f)
After pressing next, the system will do the checking. If you entered the correct verification code, the "change password" screen will show to you. You need to enter your new password 2 times. The following image is how it looks like.
![changePWFortgotPW](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/c68df122-3785-4cf0-8663-cf3fe1ccf818)
Once you entered both passwords correctly, and press the "submit" button, the success screen will show. This is how it looks like.
![forgotPWPWchanged](https://github.com/jefjefhui/Online-Discussion-Platform-Milestone1/assets/73283123/7688f2c6-4851-4e99-9ee5-d3779f9f8a77)








   








