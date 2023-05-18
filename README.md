# BMI8540project: Medical Student Mental Health & Empathy Database & Website
[WEBSITE LINK](http://odin.unomaha.edu/~amekush-harter/amekushproject2.php)
## ABSTRACT/PURPOSE:
#### Created a website that can be used to analyze data retreived during a research project that assesses the mental health and empathy of medical students.
## PROJECT OBJECTIVES/GOALS: 
- Create a database with data retrieved during a research project that assessed the mental health, empathy, and burnout of medical students.
- Create a website so users can extract certain information from the data and view graphs to visualize the data.
## BACKGROUND: 
#### This project does not require much background in order to understand it. I've provided information directly on the website that will help explain the data and have provided a link to the research paper where this data came from.
#### I am someone who works in medical education and we are always trying to find ways to make a safe environment for medical students to learn and practice their skills. We want them to fail and learn from their mistakes without worrying they will hurt someone. Understanding a medical students mental health and empathy plays a part in this.
#### I'm certain that something similar already exists. I know this isn't the only set of data that has been used to research medical student mental health and/or empathy. I would hope that someone can access all of the data from these projects and compare/contrast. I just thought it might be helpful to visualize the data and be able to extract information easily.
## PROJECT COMPONENTS: 
#### I have included the three components below for this project:
- A working database implementation
- A reproducible bash shell script 
- A public facing interface (i.e. webpage)
## DOCUMENTATION: 
#### Database
- I took the [csv file](https://raw.githubusercontent.com/amekush1/BMI8540project/main/BMI8540_project/Data%20Carrard%20et%20al.%202022%20MedTeach.csv?token=GHSAT0AAAAAACCXSYW3YJ5BUC2TKKL5Z3AEZDEFFNQ) I received from Kaggle and created a database from it using [this code](https://raw.githubusercontent.com/amekush1/BMI8540project/main/BMI8540_project/amekushprojectDB.sql?token=GHSAT0AAAAAACCXSYW2V2RN2WCQO3C6YNCMZDEFCMQ). This code uses MySQL [^1]
#### Bash Shell Script
- In order to test the script interacting with the database I created this [Bash Shell Script](https://raw.githubusercontent.com/amekush1/BMI8540project/main/BMI8540_project/amekush-harter_project_query.py?token=GHSAT0AAAAAACCXSYW35CMPVAAB6NCXKIXOZDEF6EA). It allows someone to download the script and run it using Python3 [^2]. After referencing the script, you can enter the year you want to see the averages for regarding two Mental Health scores just as a start for testing.
#### Public Facing Interface
- I used HTML and CSS to create a [website](http://odin.unomaha.edu/~amekush-harter/amekushproject2.php) that explains the data, allows for certain extraction of the data, and provides a graph to visualize the data. 
- You can see my code [here](https://raw.githubusercontent.com/amekush1/BMI8540project/main/BMI8540_project/amekushproject2.php?token=GHSAT0AAAAAACCXSYW2HYROGAXP3QZENXEEZDFTHUA).
- I used the html and css from a codepen site created by Ryan Anderson [^7].
- Part of the css uses code from Bootstrap [^8].
- If you would like to install Bootstrap you can use: `npm i bootstrap@5.3.0-alpha3`
- In order to use the information entered on the website to filter data from the website and provide information back I used PHP code with a Mysqli connection [^9].
- If you wish to download PHP go to [this link](https://www.php.net/downloads.php).
- Header was created using Adobe Express [^3].
## LICENSE:
#### [MIT License](https://raw.githubusercontent.com/amekush1/BMI8540project/main/LICENSE?token=GHSAT0AAAAAACCXSYW32LICSUU2DWO2ZVFGZDEIBFA)
## DATA PROVENANCE: 
#### I downloaded this data from the Kaggle site [^5]
#### The research article where this data originated can be found [HERE](https://www.tandfonline.com/doi/full/10.1080/0142159X.2022.2098708) [^6]
#### Data License: CC0 1.0 Universal (CC0 1.0) - Public Domain Dedication
## USERS: 
- Medical University Faculty
- Medical Education Researchers
- Medical Students
## IMPLEMENTATION CONSTRAINTS: 
- I need more time to learn css in order to make this site more UI/UX friendly. 
- Ideally, I would like to gain access to another data set from a different research project that measured similar information to compare and contrast.
- If I had more time with the data I could find new ways to measure and search for new insights.
- I was hoping to include a graph on my site but came to realize that matplotlib and pandas were much harder to grasp than I expected. I will need to spend more time practicing with these.
## PRIVACY: 
#### No Copyright - You can copy, modify, distribute and perform the work, even for commercial purposes, all without asking permission.
## ORIGINALITY: 
#### All of my python, SQL, and PHP code is original. 
#### I did use html and css from a [codepen](https://codepen.io/) project from a person named Ryan Anderson [^7]
## REFERENCES: 
[^1]: https://www.mysql.com/
[^2]: https://www.python.org/
[^5]: https://www.kaggle.com/datasets/thedevastator/medical-student-mental-health
[^6]: Valerie Carrard, Céline Bourquin, Sylvie Berney, Katja Schlegel, Jacques Gaume, Pierre-Alexandre Bart, Martin Preisig, Marianne Schmid Mast & Alexandre Berney (2022) The relationship between medical students’ empathy, mental health, and burnout: A cross-sectional study, Medical Teacher, 44:12, 1392-1399, DOI: 10.1080/0142159X.2022.2098708
[^7]: https://codepen.io/ryanaanderson0/pen/qBOVZmr
[^8]: https://getbootstrap.com/
[^9]: https://www.php.net/manual/en/book.mysqli.php
[^3]: https://express.adobe.com/sp
