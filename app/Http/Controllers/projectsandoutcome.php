<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsandoutcome extends Controller
{
   public function projects()
   {
    echo strtoupper(string:'PROJECTS:');
    echo '<br />';
    echo ucfirst(string:'Landing Page : Design & create a landing page with a functional form');
    echo '<br />';
    echo ucfirst(string:'Microsite: Build a dynamic microsite using Next.js and Tailwind CSS');
    echo '<br />';
    echo ucfirst(string:'Mobile App: Develop a mobile application using React Native & Expo.');
    echo '<br />';
    echo ucfirst(string:'Admin Panel & API: Create an admin panel with an API using Laravel');
    echo '<br />';
    echo strtoupper(string:'outcomes:');
    echo '<br />';
    echo ucfirst(string:'Gain hands-on experience in web and mobile development');
    echo '<br />';
    echo ucfirst(string:'Mentorship from experienced professionals');

    echo'<br />';
    echo ucfirst(string:'Build a diverse portfolio of projects');

    echo'<br />';
    echo ucfirst(string:'Certificate of completion.');
    echo'<br />';



   }
}
