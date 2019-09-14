# Pre-Placement-Screening-and-Alumni-Portal
Every company performs some form of pre-employment screening. The process can be as simple as asking “When can you start?" or as difficult as requiring applicants to undergo extensive pre-employment tests of experience, ability, and personality. This project involves analysis of % match of skillsets of a candidate, further hiring or rejecting the resume provided by the candidate.  


Users Involved:
1.	Students
2.	Alumni
3.	Company admins
4.	College admins

How this project extends the use of DBMS Concepts?

•	Real-time Data Processing:
The students and other users of the portal can see real time analysis as the data obtained by various users are updated and recalculated immediately. 
Graphs and charts are updated on each placement/ data entry.
•	Efficient use of Triggers: 
Triggers are used to direct data to relevant tables smartly. 
	Here, with the system date checking we ensure that the entries of BEs in a year are promoted to the Alumni Table in a year.
	If an Alumni signs up in the student account, his information is automatically accepted in the alumni table using the trigger which checks the UID for year of passing.

•	Normalisation: 
Our project model removes transitive and partial dependencies, implementing laws of Normalisation to reduce data redundancies.
Instead of having a separate “Branch” column, we decode the branch using branch ID from the user’s UID. Thus avoiding the numerous duplicate branch names and instead have a separate table to incoorperate the laws.

•	USERS and Privileges:
We implement our knowledge of this topic in our Admin and non-student users who have an access to the database. 
The Admin has view and delete privileges for students, alumni and the company members
The Alumni committee have view privilege for other Alumni associated with the portal.
The students have a view privilege for the recruiting companies 
The companies have a view privilege for certain attributes of students in the college.

Contributors - Minakshi Kudalkar,
               Shashank Gupta

