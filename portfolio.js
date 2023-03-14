var info=document.getElementById('info');
var home=document.getElementById('home');
var start=document.getElementById('start');
var education=document.getElementById('education');
var skills=document.getElementById('skills');
var experience=document.getElementById('experience');
var about=document.getElementById('about');
var contact=document.getElementById('contact');
var profile_nav=document.getElementsByClassName('profile_nav');


// document.getElementById("btn1").addEventListener("click",function (){
//     profile_nav.style.display="none";
//     home.style.display="block";
// })
// document.getElementById("btn2").addEventListener("click",function (){
//     profile_nav.style.display="none";
//     education.style.display="block";
// })
// document.getElementById("btn1").addEventListener("click",function (){
//     info.innerHTML=`<h4>Introduction</h4>
//     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint rerum earum repudiandae possimus,
//         totam quisquam quam repellat? Saepe asperiores voluptatum veritatis a. Porro optio eos natus illo
//         minus? Provident, pariatur?</p>`;
// })

document.getElementById("btn1").addEventListener("click",function (){
    info.innerHTML=`<h4>Introduction</h4>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint rerum earum repudiandae possimus,
        totam quisquam quam repellat? Saepe asperiores voluptatum veritatis a. Porro optio eos natus illo
        minus? Provident, pariatur?</p>`;
})

document.getElementById("btn2").addEventListener("click",function (){
    info.innerHTML=`<h4>Eduaction</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat ratione tenetur architecto totam non
        magnam quos temporibus, explicabo perspiciatis cupiditate placeat dicta id expedita illo a ullam
        inventore fuga sit. ipsum dolor sit amet consectetur, adipisicing elit. Sint rerum earum repudiandae possimus,
        totam quisquam quam repellat? Saepe asperiores voluptatum veritatis a. Porro optio eos natus illo
        minus? Provident, pariatur?</p>`;
})

document.getElementById("btn3").addEventListener("click",function (){
    info.innerHTML=`<h4>Skills</h4>
    <pre style="font-size: x-large">    1. Web designing: HTML, CSS, React, BootStrap, PHP, NodeJs
    2. Programming Language: C, C++, Java, JavaScript, Matlab, Fortran
    3. Database Management: MySQL, Oracle
    4. Soft skills: Leadership, Quick learner, Public Speaker
    </pre>`;
})

document.getElementById("btn4").addEventListener("click",function (){
    info.innerHTML=`<h4>Experience</h4>
    <pre style="font-size: x-large">    1. 3 years of experience as Computer Science teacher at EIS- CS School, Boston (1993 - may 1996)
    2. 7 years of experience as Software Engineer (SDE) II at Amazon (jun 1996 - aug 2003)
    3. 5 years of experience as Product Manager at Amazon (sept 2003 - oct 2008) 
    4. 3 years of experience as Product Manager at Saleforce (sept 2009 - oct 2012) 
    5. 8 years of experience as Principal at EIS- CS school, Boston (dec 2012 - oct 2020) 
    6. 2 years of ongoing experience as Managing Director of Education Hub: An institute of Excellence
    </pre>`;
})

document.getElementById("btn5").addEventListener("click",function (){
    info.innerHTML=`<h4>About me</h4>
    <p> ipsum dolor sit amet consectetur, adipisicing elit. Sint rerum earum repudiandae possimus,
    totam quisquam quam repellat? Saepe asperiores voluptatum veritatis a. Porro optio eos natus illo
    minus? Provident, pariatur?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat ratione tenetur architecto totam non
        magnam quos temporibus, explicabo perspiciatis cupiditate placeat dicta id expedita illo a ullam
        inventore fuga sit.</p>`;
})

document.getElementById("btn6").addEventListener("click",function (){
    info.innerHTML=`<h4>Contact me</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat ratione tenetur architecto totam non
        magnam quos temporibus, explicabo perspiciatis cupiditate placeat dicta id expedita illo a ullam
        inventore fuga sit. ipsum dolor sit amet consectetur, adipisicing elit. Sint rerum earum repudiandae possimus,
        totam quisquam quam repellat? Saepe asperiores voluptatum veritatis a. Porro optio eos natus illo
        minus? Provident, pariatur?</p>`;
})
