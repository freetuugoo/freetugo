<?php
// include('./js/tag.js');
?>
<head>
    <!-- <style>
        a:focus {
            background-color: #0095DA;
            color: #fff;
        }
    </style> -->
</head>

<div style="background-color:#fff; width:100%; height:240px; position:relative; z-index:1;">
    <div class="container">

        <div style="border-style: solid; border:1px; border-color:#222; padding: 30px 20px 30px 30px; text-align:center; ">

            <a style="font-size:18px; ">choose your interest</a>

        </div>

        <div style="border-style: solid; border:1px; border-color:#222; padding: 00px 20px 30px 30px; text-align:center; ">
            <a href="#" class="selectedTags" onclick="selectTag()" style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">beach</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">sea</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">mountain</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">sightseeing</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">museum</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">shopping</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#" style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">sport</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">relax</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">jungle</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">cave</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">adventure</a>
            &nbsp&nbsp&nbsp&nbsp
        </div>
        <div style="border-style: solid; border:1px; border-color:#222; padding: 0px 20px 30px 30px; text-align:center;">
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">zoo</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">theme park</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">music</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">concert</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">rave</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">solo</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">couple</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">family</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">honeymoon</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">luxury</a>
            &nbsp&nbsp&nbsp&nbsp
        </div>
        <div style="border-style: solid; border:1px; border-color:#222; padding: 0px 20px 30px 30px; text-align:center;">
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px; ">monument</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">lake</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">river</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">scuba</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">casino</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">street food</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">tower</a>
            &nbsp&nbsp&nbsp&nbsp
            <a href="#"  style="border:1px solid #d8d8d8; padding: 10px 17px 8px 17px; border-radius:30px; font-size:15px;">camping</a>
            &nbsp&nbsp&nbsp&nbsp
        </div>
    </div>
</div>