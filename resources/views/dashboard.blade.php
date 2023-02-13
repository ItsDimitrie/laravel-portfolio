@extends ('layout');

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>


<img src="/img/cameraenik.png" id="headerfoto">

<div>
    <h1>Dashboard</h1>
    <h4> <a
            href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
            target="_blank">
            Click here for the full document of the Course structure.</a> </h4>
</div>

<div id="dashboardGeheel">
    <table class="styled-table">

        <thead>
        <tr>
            <th>Course/Block</th>
            <th>Description</th>
            <th>Exams</th>
            <th>Earnable EC's</th>
            <th>Grades</th>
        </tr>
        </thead>

        <tbody>
        <tr class="active-row">
            <td>Block 1 <br> <br>Program- & Career Orientation (PCO)</td>
            <td>Students are introduced to each other, the teachers, the programme and their career opportunities. Based
                on this knowledge students can, supported
                by examples and/or reflections,</td>
            <td>Assessment website <br><br> (Individual process assessment)</td>
            <td>2.5</td>
            <td class="gradegreen">9.8</td>
        </tr>

        <tr class="active-row">
            <td>Block 1 <br><br> Computer Science Basics (CSB)</td>
            <td>Fundamental computer science concepts including definition, history, and working of computers; compilers;
                data structures; operating systems; and client-server architecture.</td>
            <td>Written knowledge test.</td>
            <td>5</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 1 <br><br> Programming Basics (PBA)</td>
            <td>Your first steps into programming. You learn subjects as: data structures, conditionals, loops, functions
                problem solving and algorithmic thinking.</td>
            <td>Case study exam.</td>
            <td>5</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 1 <br><br> IT Personality Project Week 1 (PPW1)</td>
            <td>This course can be followed 3 times during the study programme. Course description for CU75054, CU75058,
                and CU75075 are identical. IT Personality content is based on the HZ-wide programme HZ personality that
                stimulates the skills concerning and attitudes towards personal development and personal leadership. The
                programme can either have a broadening or a deepening focus when it comes to the curriculum. Each year the
                ICT program organizes a project week with real life casus and (if possible) in cooperation with other
                programs. This project week course can be chosen as 1,25 ec content for personality.
                The assessment criteria and assessment process are listed in the IT Personality 2021-2022 instruction manual
                which can be found on the Learn page.
                This course is already approved for IT personality, students only need to define their personal goals within
                the given context.</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 1 <br><br> IT Personality 1 (ITP1)</td>
            <td>IT Personality content is based on the HZ-wide programme HZ personality that stimulates the skills
                concerning and attitudes towards personal development and personal leadership. The programme can either have
                a broadening or a deepening focus when it comes to the curriculum.
                A prerequisite for starting the HZ Personality related activities is having obtained a GO from one of the IT
                personality coordinators. The assessment criteria and assessment process are
                listed in the HZ Personality 2021-2022 instruction manual which can be found on the Learn page.</td>
            <td>Portfolio.</td>
            <td>1.25</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 2 <br><br> Object-Oriented programming (OOP)</td>
            <td> You apply the object-oriented principles: abstraction, encapsulation, inheritance and polymorphism.
                First, we cover the theory then we move on to a practical assignment for a regional client.</td>
            <td>Presentation <br> <br> Case study exam </td>
            <td>10</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 3, S2 <br><br> Framework Development 1 (FDE1)</td>
            <td>The student learns the basic principles of a specific framework. The student will learn to apply that
                framework in a project.</td>
            <td>Case Study Exam.</td>
            <td>5</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 4, S2 <br><br> Framework Project 1 (FPR1)</td>
            <td>Requirement analysis (identify requirements and wishes) and software-development process. Students work in
                groups on real life SDG related cases within given frameworks.</td>
            <td>Criterium based interview, <br><br> Assignment <br><br> Case study exam</td>
            <td>7,5</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 4 <br><br>Framework Project 2 (FPR2)</td>
            <td>The course focuses on the application of the prior gained knowledge about human-machine interaction
                principles and advanced framework principles. The students learns to study more advanced concepts of a given
                framework, like the connection of information from more (then one) tables, the use of notifications and
                other innovations that suits the project (each group defines their own sprint goals). Student work on a real
                life project related to the SDGs. Students will deliver their final product to the client and will work on
                acceptation tests on their products. Student can apply a variation of certain IT developments and techniques
                to their project. In this way students can choose (in addition to a general
                basis) their own personalized theme to deepen or broaden.</td>
            <td>Final delivery, <br><br> Report of acceptance tests and optional assessments, <br><br> IT Development
                portfolio. </td>
            <td>10</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 4 <br><br>IT Personality International week (PIW)</td>
            <td>IT Personality content is based on the HZ-wide programme HZ personality that stimulates the skills
                concerning and attitudes towards personal development and personal leadership. The programme can either have
                a broadening or a deepening focus when it comes to the curriculum. Each year the ICT program organizes an
                international week. If possible, including a visit in an international city. This international week course
                can be chosen as 1,25 ec content for personality.
                The assessment criteria and assessment process are listed in the IT Personality 2021-2022 instruction manual
                which can be found on the Learn page.
                This course is already approved for IT personality, students only need to define their personal goals within
                the given context.</td>
            <td> Portfolio</td>
            <td>1.25</td>
            <td class="gradered">N/A</td>
        </tr>

        <tr class="active-row">
            <td>Block 4 <br><br>Personal Professional Development: Exploration (PPD-E)</td>
            <td> General Bachelor-competences, in this case: aspects of written reporting like language provision, style,
                typography, house style, further layout and referencing. Reporting skills are applied on the subject of game
                development and
                combined with further guidance on development as an (international) ICT student on this program. The
                feedback based improvement
                can be demonstrated in the second reading and writing assignment. General bachelor competences in Agile
                working project groups (by retrospective feedback
                or self study). In this case: self-steering and (team)learning, methodical judgment, communicational
                behaviour in project groups.</td>
            <td>Dutch Test <br><br> English Test <br><br> Criterium focused interview </td>
            <td>12,5</td>
            <td class="gradered">N/A</td>
        </tr>

        </tbody>
    </table>
</div>

<div id="progressbar">
    <h4>Progress bar Study Year 1</h4>
    <p>EC's to be earned : 60</p>
    <p>Currently earned : 2.5 EC's</p>
    <progress style="width:50%" value="2.5" max="60"></progress>
</div>

