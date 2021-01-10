

function removeAlldr2(dr2){                  // Removing items from drop down menu
  for(var i = dr2.options.length-1; i>=0; i--){
    dr2.remove(i);
  }
}

function removeAlldr3(dr3){
  for(var i = dr3.options.length-1; i>=0; i--){
    dr3.remove(i);
  }
}

function insertOptions(dr1,dr2){
  var dr1 = document.getElementById('dr1');
  var dr2 = document.getElementById('dr2');

   if(dr1.options[dr1.selectedIndex].value === "banglaMedium"){
     var banglaMedOpt = [];
     var banglaClassValue = ["class1","class2", "class3", "class4", "class5", "class6", "class7", "class8", "class9", "class10", "interFirstYear", "interSecondYear"]; //value
     var banglaClassText= ["Class 1","Class 2", "Class 3", "Class 4", "Class 5", "Class 6", "Class 7", "Class 8", "Class 9", "Class 10", "Intermediate First Year", "Intermediate Second Year"];


     for(var i =0; i<12; i++){
       banglaMedOpt[i] = document.createElement("option");
       banglaMedOpt[i].value = banglaClassValue[i];
       banglaMedOpt[i].setAttribute("name",banglaClassValue[i] );
       banglaMedOpt[i].innerHTML = banglaClassText[i];
     }

     removeAlldr2(dr2);
     for(var i=0; i<12; i++){
       dr2.options.add(banglaMedOpt[i]);
     }


  }

   else if(dr1.options[dr1.selectedIndex].value === "englishMedium"){
     var englishMedOpt = [];
     var englishClassValue = ["class1","class2", "class3", "class4", "class5", "class6", "class7", "class8", "olevel","alevel"];
     var englishClassText= ["Class 1","Class 2", "Class 3", "Class 4", "Class 5", "Class 6", "Class 7", "Class 8", "O Level","A Level"];
     for(var i =0; i<10; i++){
       englishMedOpt[i] = document.createElement("option");
       englishMedOpt[i].value = englishClassValue[i];
       englishMedOpt[i].setAttribute("name",englishClassValue[i]);
       englishMedOpt[i].innerHTML = englishClassText[i];
     }

     removeAlldr2(dr2);
     for(var i=0; i<10; i++){
       dr2.options.add(englishMedOpt[i]);
     }
   }
   else if(dr1.options[dr1.selectedIndex].value == "englishVersion"){
     var englishVerOpt = [];
     var englishVerValue = ["class1","class2", "class3", "class4", "class5", "class6", "class7", "class8", "class9", "class10", "interFirstYear", "InterSecondYear"];
     var englishVerText= ["Class 1","Class 2", "Class 3", "Class 4", "Class 5", "Class 6", "Class 7", "Class 8", "Class 9", "Class 10", "Intermediate First Year", "Intermediate Second Year"];
     for(var i =0; i<12; i++){
       englishVerOpt[i] = document.createElement("option");
       englishVerOpt[i].value = englishVerValue[i];
       englishVerOpt[i].setAttribute("name", englishVerValue[i]);
       englishVerOpt[i].innerHTML = englishVerText[i];

     }

     removeAlldr2(dr2);
     for(var i=0; i<12; i++){
       dr2.options.add(englishVerOpt[i]);
     }
   }
}


function insertSubjects(dr2,dr3){         //choosing subjects

  var dr2 = document.getElementById('dr2');
  var dr3 = document.getElementById('dr3');
  var classTillEightBen = ["class1","class2", "class3", "class4", "class5", "class6", "class7", "class8"];
  var classAfterEightBen = ["class9", "class10", "interFirstYear", "interSecondYear"];
  var classTillEightEng = ["class1","class2", "class3", "class4", "class5", "class6", "class7", "class8"];
  var classAfterEightEng = ["olevel","alevel"];

  for(var i=0; i<8; i++){
    if(dr2.options[dr2.selectedIndex].value === classTillEightBen[i] && (dr1.options[dr1.selectedIndex].value==="banglaMedium" || dr1.options[dr1.selectedIndex].value==="englishVersion")){
      var banglaSubOpt = []
      var banglaSub8Text = ["English", "Bangla", "Science", "Mathematics","Religion", "Social Science", "Agriculture", "ICT" ];
      var banglaSub8Value = ["english", "bangla", "science", "mathematics","religion", "social_science", "agriculture", "ict" ];  // value of bangla subjects


      removeAlldr3(dr3);
      for(var i=0; i<8; i++){
      banglaSubOpt[i] = document.createElement("option");
      banglaSubOpt[i].value = banglaSub8Value[i];
      banglaSubOpt[i].setAttribute("name",banglaSub8Value[i] );
      banglaSubOpt[i].innerHTML = banglaSub8Text[i];
      dr3.options.add(banglaSubOpt[i]);

      }
      banglaSubOpt[8] = document.createElement("option");
      banglaSubOpt[8].value = "all_subject";
      banglaSubOpt[8].setAttribute("name","all_subject" );
      banglaSubOpt[8].innerHTML = "All Subjects";
      dr3.options.add(banglaSubOpt[8]);

    }
  }

  for(var i=0; i<4; i++){
    if(dr2.options[dr2.selectedIndex].value === classAfterEightBen[i] && (dr1.options[dr1.selectedIndex].value==="banglaMedium" || dr1.options[dr1.selectedIndex].value==="englishVersion")){
      var banglaSubOpt = []
      var banglaSubAbove8Text = ["English", "Bangla", "Physics", "Chemistry", "Biology", "Higher Mathematics", "General Mathematics", "Religion", "Social Science", "Agriculture", "ICT", "History", "Accounting", "Finance", "Marketing", "Management", "Economics", "Geography", "Politics" ];   // value
      var banglaSubAbove8Value = ["english", "bangla", "physics", "chemistry", "biology", "higher_mathematics", "general_mathematics", "religion", "social_science", "agriculture", "ict", "history", "accounting", "finance", "marketing", "management", "economics", "geography", "politics" ];

      removeAlldr3(dr3);
      for(var i=0; i<19; i++){
      banglaSubOpt[i] = document.createElement("option");
      banglaSubOpt[i].value = banglaSubAbove8Value[i];
        banglaSubOpt[i].setAttribute("name",banglaSubAbove8Value[i]);
      banglaSubOpt[i].innerHTML = banglaSubAbove8Text[i];
      dr3.options.add(banglaSubOpt[i]);

      }
    }
  }

  for(var i=0; i<8; i++){
    if(dr2.options[dr2.selectedIndex].value === classTillEightEng[i] && dr1.options[dr1.selectedIndex].value==="englishMedium"){
      var englishSubOpt = []
      var englishSub8Text = [ "English ", "Science", "Mathematics","Religion", "Environmental Management", "Social Science", "Agriculture", "ICT" ];
      var englishSub8Value = ["english", "science", "mathematics","religion", "environmental_management", "social_science", "agriculture", "ict" ];  // value of bangla subjects


      removeAlldr3(dr3);
      for(var i=0; i<8; i++){
      englishSubOpt[i] = document.createElement("option");
      englishSubOpt[i].value = englishSub8Value[i];
      englishSubOpt[i].setAttribute("name", englishSub8Value[i]);
      englishSubOpt[i].innerHTML = englishSub8Text[i];
      dr3.options.add(englishSubOpt[i]);

      }
      englishSubOpt[8] = document.createElement("option"); // extra section for all subject
      englishSubOpt[8].value = "all_subject";
      englishSubOpt[8].setAttribute("name", "all_subject");
      englishSubOpt[8].innerHTML = "All Subjects";
      dr3.options.add(englishSubOpt[8]);

    }
  }

  for(var i=0; i<2; i++){
    if(dr2.options[dr2.selectedIndex].value === classAfterEightEng[i] && dr1.options[dr1.selectedIndex].value==="englishMedium"){
      var englishSubOpt2 = [];
      var englishSubAbove8Text = ["English", "Bangla", "Physics", "Chemistry", "Biology", "Pure Mathematics", "Religion", "Statistics", "ICT", "Law", "Accounting", "Finance", "Marketing", "Management", "Economics", "Politics" ];   // value
      var englishSubAbove8Value = ["english", "bangla", "physics", "chemistry", "biology", "pure_mathematics", "religion", "statistics", "ict", "law", "accounting", "finance", "marketing", "management", "economics", "politics" ];

      removeAlldr3(dr3);
      for(var i=0; i<16; i++){
      englishSubOpt2[i] = document.createElement("option");
      englishSubOpt2[i].value = englishSubAbove8Value[i];
      englishSubOpt2[i].setAttribute("name",englishSubAbove8Value[i] );
      englishSubOpt2[i].innerHTML = englishSubAbove8Text[i];
      dr3.options.add(englishSubOpt2[i]);

      }
    }
  }

}
