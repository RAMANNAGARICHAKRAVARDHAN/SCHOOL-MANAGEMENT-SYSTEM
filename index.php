<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Admission Webportal</title>
        <meta name="description" content="Student Admission Webportal | DBMS Mini Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="application/x-javascript">
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); 
            }, false);

            function hideURLbar(){ 
                window.scrollTo(0,1); 
            } 
        </script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <form action="php/admin.php" method="POST">
            <div class="admin-login">
                <input type="submit" name="admin" value="Admin" id="admin">
            </div>
        </form>

        <h1 class="main-heading">Student Application 2024-25</h1>
        <main class="container">
            <p>Fill this application to apply for an SRM BTech Programme.</p>
    
            <form action="php/feedback.php" method="POST" class="admission-form">
                <div class="student-details">
                    <h3>Student Details</h3>
                    <label>Student Name
                        <input type="text" name="name" id="name">
                    </label>
                    <br><br>
                    <label>Gender
                        <select name="gender" id="gender">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Blood Group
                        <select name="blood-grp" id="blood-grp">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </label>
                    <br><br>
                    <label>Date of Birth
                        <input type="date" name="dob" id="dob">
                    </label>
                    <br><br>
                    <label>Mobile No 1
                        <input type="text" name="mob1" id="mob1">
                    </label>
                    <br><br>
                    <label>Mobile No 2
                        <input type="text" name="mob2" id="mob2">
                    </label>
                    <br><br>
                    <label>Email
                        <input type="email" name="email" id="email">
                    </label>
                    <br><br>
                    <label>Aadhaar Number
                        <input type="text" name="aadhar" id="aadhar">
                    </label>
                    <br><br>
                    <label>Father's Name
                        <input type="text" name="f_name" id="f_name">
                    </label>
                    <br><br>
                    <label>Father's Occupation
                        <input type="text" name="f_occ" id="f_occ">
                    </label>
                    <br><br>
                    <label>Mother's Name
                        <input type="text" name="m_name" id="m_name">
                    </label>
                    <br><br>
                    <label>Mother's Occupation
                        <input type="text" name="m_occ" id="m_occ">
                    </label>
                    <br><br>
                    <label>Branch
                        <select name="branch" id="branch">
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </select>
                    </label>

                </div>
    
                <div class="health-details">
                    <h4>Whether suffering from any chronic disease</h4>
                    <select name="disease" id="disease">
                        <option value="NO">NO</option>
                        <option value="YES">YES</option>
                    </select>
                    <p>If yes, please provide detailed information.</p>
                    <textarea rows="5" name="dis-details" id="dis-details"></textarea>
                    <br><br>
                </div>
    
                <div class="declaration-details">
                    <h4>Declaration by the applicant</h4>
                    <p>I certified that all information provided by me in this form is correct to the best of my knowledge and belief. I understand that any willful misrepresentation of facts will result in my dismissal from the Institute. If admitted, I shall abide by all rules and regulations of the Institute.</p>
                    <label>Date
                        <input type="date" name="date" id="date">
                    </label>
                    <br><br><br>
                    <label>Signature of Applicant
                        <div class="upload-file">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Upload
                            <input type="file" name="sign" id="sign">
                        </div>
                    </label>
                    <br><br>
                </div>
    
                <div class="submit-form">
                    <input type="submit" name="submit" value="Submit" id="submit">
                </div>
            </form>
            <br>
        </main>
        
        <footer class="copyright-text">
            <p>© 2024 </p>
        </footer>
    </body>
</html>