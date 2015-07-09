<?php
session_start();
if($_SESSION["status"]==1)
die();
?>
<script>
 $(document).ajaxStop(function () {
        $('#loading').hide();
    });

    $(document).ajaxStart(function () {
        $('#loading').show();
    });
   $(document).load(function () {
        $('#loading').show();
    });
$( document ).ready(function() {
    
$(':input[type="number"]').attr( 'min','0');
$(':input[type="number"]').each(function() {

});
});

 </script>

<form class="ng-cloak"  id="fpaForm" name="fpaForm">

    <div >
       
        <div class="row" style="padding-top: 20px">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead></thead>
                    <tbody>
                        <tr>

                            <td><label for="name">Name: </label><input name="name" id="name" class="form-control" required="required" type="text" value="<?php echo $name; ?>" readonly="readonly"></td>
                            <td><label for="designation">Designation: </label><input type="text" name="designation" id="designation" class="form-control" value="<?php echo $designation ?>" required="required" readonly="readonly">
                                                                    </td>
                            <td><label for="dept">Dept:</label><input type="text" name="dept" id="dept" class="form-control" value="<?php echo $dept; ?>" required="required" readonly="readonly"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
        <h2 class="heading" style="text-align: center">PART – I: Information on Academic Activity</h2>

    <div class="container" style="border: 1px solid black">
        <h3 class="heading">i. Teaching load:</h3>
        <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered" style="border:1px solid black;">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th style"width:100%">Subject</th>
                            <th>Dept</th>
                            <th>Course/Year</th>
                            <th>Sem</th>
                            <th>Pds/week</th>

                                <th style="background-color:yellow;">Part * handled</th>
                                <th style="background-color:yellow;">Allotted</th>
                                <th style="background-color:yellow;">Engaged</th>

                            <th>% Syllabus Covered</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><textarea class="msd-elastic"  name="teachLoadSub1" ng-model="fpaupdate.teachLoadSub1" style="width:100%" ></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept1"  id="teachLoadDept1" ng-model="fpaupdate.teachLoadDept1"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse1" type="text" id="teachLoadCourse1" ng-model="fpaupdate.teachLoadCourse1"></td>
                            <td><input class="myinput" name="teachLoadSem1" type="text" id="teachLoadSem1" ng-model="fpaupdate.teachLoadSem1"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek1" type="text" id="teachLoadPdsForWeek1" ng-model="fpaupdate.teachLoadPdsForWeek1"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled1" type="text" id="teachLoadPartsHandled1" ng-model="fpaupdate.teachLoadPartsHandled1"></td>
                            <td><input class="myinput" name="teachLoadAllotted1" type="text" id="teachLoadAllotted1" ng-model="fpaupdate.teachLoadAllotted1"></td>
                            <td><input class="myinput" name="teachLoadEngaged1" type="text" id="teachLoadEngaged1" ng-model="fpaupdate.teachLoadEngaged1"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered1" type="text" id="teachLoadSyllabusCovered1" ng-model="fpaupdate.teachLoadSyllabusCovered1"></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td><textarea style="width:100%" class="msd-elastic" name="teachLoadSub2" type="text" id="teachLoadSub2" ng-model="fpaupdate.teachLoadSub2"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept2"id="teachLoadDept2" ng-model="fpaupdate.teachLoadDept2"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></selct></td>
                            <td><input class="myinput" name="teachLoadCourse2" type="text" id="teachLoadCourse2" ng-model="fpaupdate.teachLoadCourse2"></td>
                            <td><input class="myinput" name="teachLoadSem2"id="teachLoadSem2" ng-model="fpaupdate.teachLoadSem2" type="text"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek2" type="text" id="teachLoadPdsForWeek2" ng-model="fpaupdate.teachLoadPdsForWeek2"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled2" type="text" id="teachLoadPartsHandled2" ng-model="fpaupdate.teachLoadPartsHandled2"></td>
                            <td><input class="myinput" name="teachLoadAllotted2" type="text" id="teachLoadAllotted2" ng-model="fpaupdate.teachLoadAllotted2"></td>
                            <td><input class="myinput" name="teachLoadEngaged2" type="text" id="teachLoadEngaged2" ng-model="fpaupdate.teachLoadEngaged2"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered2" type="text" id="teachLoadSyllabusCovered2" ng-model="fpaupdate.teachLoadSyllabusCovered2"></td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td><textarea  style="width:100%"class="msd-elastic" name="teachLoadSub3" type="text" id="teachLoadSub3" ng-model="fpaupdate.teachLoadSub3"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept3" id="teachLoadDept3" ng-model="fpaupdate.teachLoadDept3"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse3" type="text" id="teachLoadCourse3" ng-model="fpaupdate.teachLoadCourse3"></td>
                            <td><input class="myinput" name="teachLoadSem3" type="text" id="teachLoadSem3" ng-model="fpaupdate.teachLoadSem3"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek3" type="text" id="teachLoadPdsForWeek3" ng-model="fpaupdate.teachLoadPdsForWeek3"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled3" type="text" id="teachLoadPartsHandled3" ng-model="fpaupdate.teachLoadPartsHandled3"></td>
                            <td><input class="myinput" name="teachLoadAllotted3" type="text" id="teachLoadAllotted3" ng-model="fpaupdate.teachLoadAllotted3"></td>
                            <td><input class="myinput" name="teachLoadEngaged3" type="text" id="teachLoadEngaged3" ng-model="fpaupdate.teachLoadEngaged3"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered3" type="text" id="teachLoadSyllabusCovered3" ng-model="fpaupdate.teachLoadSyllabusCovered3"></td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td><textarea style="width:100%" class="msd-elastic" name="teachLoadSub4" type="text" id="teachLoadSub4" ng-model="fpaupdate.teachLoadSub4"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept4"  id="teachLoadDept4" ng-model="fpaupdate.teachLoadDept4"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse4" type="text" id="teachLoadCourse4" ng-model="fpaupdate.teachLoadCourse4"></td>
                            <td><input class="myinput" name="teachLoadSem4" type="text" id="teachLoadSem4" ng-model="fpaupdate.teachLoadSem4"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek4" type="text" id="teachLoadPdsForWeek4" ng-model="fpaupdate.teachLoadPdsForWeek4"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled4" type="text" id="teachLoadPartsHandled4" ng-model="fpaupdate.teachLoadPartsHandled4"></td>
                            <td><input class="myinput" name="teachLoadAllotted4" type="text" id="teachLoadAllotted4" ng-model="fpaupdate.teachLoadAllotted4"></td>
                            <td><input class="myinput" name="teachLoadEngaged4" type="text" id="teachLoadEngaged4" ng-model="fpaupdate.teachLoadEngaged4"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered4" type="text" id="teachLoadSyllabusCovered4" ng-model="fpaupdate.teachLoadSyllabusCovered4"></td>

                        </tr>
                        <tr>
                            <td>5</td>
                            <td><textarea  style="width:100%"class="msd-elastic" name="teachLoadSub5" type="text" id="teachLoadSub5" ng-model="fpaupdate.teachLoadSub5"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept5"  id="teachLoadDept5" ng-model="fpaupdate.teachLoadDept5"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse5" type="text" id="teachLoadCourse5" ng-model="fpaupdate.teachLoadCourse5"></td>
                            <td><input class="myinput" name="teachLoadSem5" type="text" id="teachLoadSem5" ng-model="fpaupdate.teachLoadSem5"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek5" type="text" id="teachLoadPdsForWeek5" ng-model="fpaupdate.teachLoadPdsForWeek5"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled5" type="text" id="teachLoadPartsHandled5" ng-model="fpaupdate.teachLoadPartsHandled5"></td>
                            <td><input class="myinput" name="teachLoadAllotted5" type="text" id="teachLoadAllotted5" ng-model="fpaupdate.teachLoadAllotted5"></td>
                            <td><input class="myinput" name="teachLoadEngaged5" type="text" id="teachLoadEngaged5" ng-model="fpaupdate.teachLoadEngaged5"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered5" type="text" id="teachLoadSyllabusCovered5" ng-model="fpaupdate.teachLoadSyllabusCovered5"></td>

                        </tr>
                        <tr>
                            <td>6</td>
                            <td><textarea style="width:100%" class="msd-elastic" name="teachLoadSub6" type="text" id="teachLoadSub6" ng-model="fpaupdate.teachLoadSub6"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept6"  id="teachLoadDept6" ng-model="fpaupdate.teachLoadDept6"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse6" type="text" id="teachLoadCourse6" ng-model="fpaupdate.teachLoadCourse6"></td>
                            <td><input class="myinput" name="teachLoadSem6" type="text" id="teachLoadSem6" ng-model="fpaupdate.teachLoadSem6"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek6" type="text" id="teachLoadPdsForWeek6" ng-model="fpaupdate.teachLoadPdsForWeek6"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled6" type="text" id="teachLoadPartsHandled6" ng-model="fpaupdate.teachLoadPartsHandled6"></td>
                            <td><input class="myinput" name="teachLoadAllotted6" type="text" id="teachLoadAllotted6" ng-model="fpaupdate.teachLoadAllotted6"></td>
                            <td><input class="myinput" name="teachLoadEngaged6" type="text" id="teachLoadEngaged6" ng-model="fpaupdate.teachLoadEngaged6"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered6" type="text" id="teachLoadSyllabusCovered6" ng-model="fpaupdate.teachLoadSyllabusCovered6"></td>

                        </tr>
                        <tr>
                            <td>7</td>
                            <td><textarea style="width:100%" class="msd-elastic" name="teachLoadSub7" type="text" id="teachLoadSub7" ng-model="fpaupdate.teachLoadSub7"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept7"  id="teachLoadDept7" ng-model="fpaupdate.teachLoadDept7"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse7" type="text" id="teachLoadCourse7" ng-model="fpaupdate.teachLoadCourse7"></td>
                            <td><input class="myinput" name="teachLoadSem7"  id="teachLoadSem7" ng-model="fpaupdate.teachLoadSem7" type="text"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek7" type="text" id="teachLoadPdsForWeek7" ng-model="fpaupdate.teachLoadPdsForWeek7"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled7" type="text" id="teachLoadPartsHandled7" ng-model="fpaupdate.teachLoadPartsHandled7"></td>
                            <td><input class="myinput" name="teachLoadAllotted7" type="text" id="teachLoadAllotted7" ng-model="fpaupdate.teachLoadAllotted7"></td>
                            <td><input class="myinput" name="teachLoadEngaged7" type="text" id="teachLoadEngaged7" ng-model="fpaupdate.teachLoadEngaged7"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered7" type="text" id="teachLoadSyllabusCovered7" ng-model="fpaupdate.teachLoadSyllabusCovered7"></td>

                        </tr>
                        <tr>
                            <td>8</td>
                            <td><textarea style="width:100%" class="msd-elastic" name="teachLoadSub8" type="text" id="teachLoadSub8" ng-model="fpaupdate.teachLoadSub8"></textarea></td>
                            <td><select style"width:100%" name="teachLoadDept8" type="text" id="teachLoadDept8" ng-model="fpaupdate.teachLoadDept8"><option value="" ></option><option value="IT">IT</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="EEE">EEE</option><option value="MECH">MECH</option><option value="CIVIL">CIVIL</option><option value="MBA">MBA</option><option value="AUTO">AUTO</option><option value="SH">SH</option></select></td>
                            <td><input class="myinput" name="teachLoadCourse8" type="text" id="teachLoadCourse8" ng-model="fpaupdate.teachLoadCourse8"></td>
                            <td><input class="myinput" name="teachLoadSem8" type="text" id="teachLoadSem8" ng-model="fpaupdate.teachLoadSem8"></td>
                            <td><input class="myinput" name="teachLoadPdsForWeek8" type="text" id="teachLoadPdsForWeek8" ng-model="fpaupdate.teachLoadPdsForWeek8"></td>
                            <td><input class="myinput" name="teachLoadPartsHandled8" type="text" id="teachLoadPartsHandled8" ng-model="fpaupdate.teachLoadPartsHandled8"></td>
                            <td><input class="myinput" name="teachLoadAllotted8" type="text" id="teachLoadAllotted8" ng-model="fpaupdate.teachLoadAllotted8"></td>
                            <td><input class="myinput" name="teachLoadEngaged8" type="text" id="teachLoadEngaged8" ng-model="fpaupdate.teachLoadEngaged8"></td>
                            <td><input class="myinput" name="teachLoadSyllabusCovered8" type="text" id="teachLoadSyllabusCovered8" ng-model="fpaupdate.teachLoadSyllabusCovered8"></td>

                        </tr>
                    </tbody>
                </table>
                <span class="info">*If handled 2 out of 4 ppw, enter ½; 2 batches of 3 in Lab, enter 2/3 etc</span><br />

               </div>
            <h3 class="heading">ii. Projects Guided: </h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:30px">S.No</th>
                                <th style="width:400px">Title</th>
                                <th style="width:100px">No. of Students </th>
                                <th style="width:100px">College/ Outside </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><textarea class="msd-elastic" name="projectHandledName1" style="width: 100%;"  id="projectHandledName1" ng-model="fpaupdate.projectHandledName1"></textarea></td>
                                <td><input name="projectHandledForNoOfStudent1" type="number" max="10" id="projectHandledForNoOfStudent1" ng-model="fpaupdate.projectHandledForNoOfStudent1"></td>
                                <td><select name="projectHandledFor1"  id="projectHandledFor1" ng-model="fpaupdate.projectHandledFor1" ><option value=""></option><option value="College">College</option><option value="Outside">Outside </option></select></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><textarea class="msd-elastic" name="projectHandledName2" style="width: 100%;" type="text"  id="projectHandledName2" ng-model="fpaupdate.projectHandledName2"></textarea></td>
                                <td><input name="projectHandledForNoOfStudent2" type="number"max="10" id="projectHandledForNoOfStudent2" ng-model="fpaupdate.projectHandledForNoOfStudent2"></td>
                                <td><select name="projectHandledFor2" id="projectHandledFor2" ng-model="fpaupdate.projectHandledFor2""><option value=""></option><option value="College">College</option><option value="Outside">Outside </option></select></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><textarea class="msd-elastic" name="projectHandledName3" style="width: 100%;" type="text" id="projectHandledName3" ng-model="fpaupdate.projectHandledName3"></textarea></td>
                                <td><input name="projectHandledForNoOfStudent3" type="number"max="10" id="projectHandledForNoOfStudent3" ng-model="fpaupdate.projectHandledForNoOfStudent3"></td>
                                <td><select name="projectHandledFor3" id="projectHandledFor3" ng-model="fpaupdate.projectHandledFor3"  ><option value=""></option><option value="College">College</option><option value="Outside">Outside </option></select></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><textarea class="msd-elastic" name="projectHandledName4" style="width: 100%;" type="text" id="projectHandledName4" ng-model="fpaupdate.projectHandledName4"></textarea></td>
                                <td><input name="projectHandledForNoOfStudent4" type="number"max="10" id="projectHandledForNoOfStudent4" ng-model="fpaupdate.projectHandledForNoOfStudent4"></td>
                                <td><select name="projectHandledFor4" id="projectHandledFor4" ng-model="fpaupdate.projectHandledFor4"  ><option value=""></option><option value="College">College</option><option value="Outside">Outside </option></select></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">iii. Seminar, Workshop, FDP, Refresher course etc. attended: </h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Organizer</th>
                                <th>Dates attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><textarea class="msd-elastic" name="seminarName1" style="width: 100%;" type="text" id="seminarName1" ng-model="fpaupdate.seminarName1"></textarea></td>
                                <td><input class="form-control" name="seminarOrganizer1" style="width: 100%;" type="text" id="seminarOrganizer1" ng-model="fpaupdate.seminarOrganizer1"></td>
                                <td><input class="form-control" name="seminarDates1" style="width:100%" type="text" id="seminarDates1" ng-model="fpaupdate.seminarDates1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><textarea class="msd-elastic" name="seminarName2" style="width: 100%;" type="text" id="seminarName2" ng-model="fpaupdate.seminarName2"></textarea></td>
                                <td><input class="form-control" name="seminarOrganizer2" style="width: 100%;" type="text" id="seminarOrganizer2" ng-model="fpaupdate.seminarOrganizer2"></td>
                                <td><input class="form-control" name="seminarDates2" style="width:100%" type="text" id="seminarDates2" ng-model="fpaupdate.seminarDates2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><textarea class="msd-elastic" name="seminarName3" style="width: 100%;" type="text" id="seminarName3" ng-model="fpaupdate.seminarName3"></textarea></td>
                                <td><input class="form-control" name="seminarOrganizer3" style="width: 100%;" type="text" id="seminarOrganizer3" ng-model="fpaupdate.seminarOrganizer3"></td>
                                <td><input class="form-control" name="seminarDates3" style="width:100%" type="text" id="seminarDates3" ng-model="fpaupdate.seminarDates3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><textarea class="msd-elastic" name="seminarName4" style="width: 100%;" type="text" id="seminarName4" ng-model="fpaupdate.seminarName4"></textarea></td>
                                <td><input class="form-control" name="seminarOrganizer4" style="width: 100%;" type="text" id="seminarOrganizer4" ng-model="fpaupdate.seminarOrganizer4"></td>
                                <td><input class="form-control" name="seminarDates4" style="width:100%" type="text" id="seminarDates4" ng-model="fpaupdate.seminarDates4"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">iv. Research and other publications: </h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th style="width:350px">Title</th>
                                <th>Journal/ Conference</th>
                                <th style="width:70px">Date</th>
                                <th style="width:70px">Vol</th>
                                <th style="width:70px">Pages</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                <td>1</td>
                                <td><textarea class="msd-elastic" style="width:100%"  type="text" id="journalName1" ng-model="fpaupdate.journalName1"></textarea></td>
                                <td><select  class="form-control" name="journalType1" id="journalType1" ng-model="fpaupdate.journalType1"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear1"  style="width:120px" type="" class="date"" id="journalYear1" ng-model="fpaupdate.journalYear1"></td>
                                <td><input name="journalVol1" class="form-control" style="width:70px" type="number" id="journalVol1" ng-model="fpaupdate.journalVol1"></td>
                                <td><input name="journalPages1" class="form-control" style="width:70px" type="number" id="journalPages1" ng-model="fpaupdate.journalPages1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><textarea class="msd-elastic"style="width:100%"  type="text" id="journalName2" ng-model="fpaupdate.journalName2"></textarea></td>
                                <td><select  class="form-control" name="journalType2" id="journalType2" ng-model="fpaupdate.journalType2"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear2"  style="width:120px" type=""class="date" id="journalYear2" ng-model="fpaupdate.journalYear2"></td>
                                <td><input name="journalVol2" class="form-control" style="width:70px" type="number" id="journalVol2" ng-model="fpaupdate.journalVol2"></td>
                                <td><input name="journalPages2" class="form-control" style="width:70px" type="number" id="journalPages2" ng-model="fpaupdate.journalPages2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><textarea class="msd-elastic"style="width:100%" name="journalName3" type="text" id="journalName3" ng-model="fpaupdate.journalName3"></textarea></td>
                                <td><select  class="form-control" name="journalType3" id="journalType3" ng-model="fpaupdate.journalType3"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear3"  style="width:120px" type=""class="date" id="journalYear3" ng-model="fpaupdate.journalYear3"></td>
                                <td><input name="journalVol3" class="form-control" style="width:70px" type="number" id="journalVol3" ng-model="fpaupdate.journalVol3"></td>
                                <td><input name="journalPages3" class="form-control" style="width:70px" type="number" id="journalPages3" ng-model="fpaupdate.journalPages3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><textarea class="msd-elastic"style="width:100%" name="journalName4"  type="text" id="journalName4" ng-model="fpaupdate.journalName4"></textarea></td>
                                <td><select  class="form-control" name="journalType4" id="journalType4" ng-model="fpaupdate.journalType4"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear4" style="width:120px" type="" class="date" id="journalYear4" ng-model="fpaupdate.journalYear4"></td>
                                <td><input name="journalVol4" class="form-control" style="width:70px" type="number" id="journalVol4" ng-model="fpaupdate.journalVol4"></td>
                                <td><input name="journalPages4" class="form-control" style="width:70px" type="number" id="journalPages4" ng-model="fpaupdate.journalPages4"></td>
                            </tr>
                             <tr>
                                <td>5</td>
                                <td><textarea class="msd-elastic"style="width:100%"  type="text" id="journalName5" ng-model="fpaupdate.journalName5"></textarea></td>
                                <td><select  class="form-control" name="journalType5" id="journalType5" ng-model="fpaupdate.journalType5"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear1" style="width:120px" type="" class="date" id="journalYear5" ng-model="fpaupdate.journalYear5"></td>
                                <td><input name="journalVol1" class="form-control" style="width:70px" type="number" id="journalVol5" ng-model="fpaupdate.journalVo51"></td>
                                <td><input name="journalPages1" class="form-control" style="width:70px" type="number" id="journalPages5" ng-model="fpaupdate.journalPage51"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><textarea class="msd-elastic" style="width:100%"  type="text" id="journalName2" ng-model="fpaupdate.journalName6"></textarea></td>
                                <td><select  class="form-control" name="journalType2" id="journalType6" ng-model="fpaupdate.journalType6"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear2"  style="width:120px" type="" class="date" id="journalYear6" ng-model="fpaupdate.journalYear6"></td>
                                <td><input name="journalVol2" class="form-control" style="width:70px" type="number" id="journalVol6" ng-model="fpaupdate.journalVol6"></td>
                                <td><input name="journalPages2" class="form-control" style="width:70px" type="number" id="journalPages6" ng-model="fpaupdate.journalPages6"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><textarea class="msd-elastic" style="width:100%"name="journalName3" type="text" id="journalName7" ng-model="fpaupdate.journalName7"></textarea></td>
                                <td><select  class="form-control" name="journalType3" id="journalType3" ng-model="fpaupdate.journalType7"><option value=""></option><option value="Journal">Journal</option><option value="Conference">Conference</option></select></td>
                                <td><input name="journalYear3" style="width:120px" type="" class="date" id="journalYear7" ng-model="fpaupdate.journalYear7"></td>
                                <td><input name="journalVol3" class="form-control" style="width:70px" type="number" id="journalVol7" ng-model="fpaupdate.journalVol7"></td>
                                <td><input name="journalPages3" class="form-control" style="width:70px" type="number" id="journalPages7" ng-model="fpaupdate.journalPages7"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">v. Membership of Professional Societies: </h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <textarea class="form-control" name="membershipInSocieties" style="width: 100%" rows="6"  ng-model="fpaupdate.membershipInSocieties">membershipInSocieties</textarea>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">vi. Administrative works carried out –Dept. or College: </h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <textarea class="form-control" name="administrativeWorks" style="width: 100%" rows="6"  ng-model="fpaupdate.administrativeWorks">administrativeWorks</textarea>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">vii. Other Activities Carried out during the year:</h3>
            <h5>&nbsp;&nbsp;&nbsp;(Lab Development , Seminars organized,  R&amp;D, Consultancy, Industry Interaction, Co &amp;
                Extra  Curricular Activities etc.)
            </h5>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <textarea class="form-control" name="otherActivities" style="width: 100%" rows="6" ng-model="fpaupdate.otherActivities">otherActivities</textarea>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">viii. Proposed Plans for next Academic year:</h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <textarea class="form-control" name="proposedPlansForNextAcadamic" style="width: 100%" rows="6" ng-model="fpaupdate.proposedPlansForNextAcadamic">proposedPlansForNextAcadamic</textarea>
                </div>
                <div class="col-md-1"></div>
            </div>
            <h3 class="heading">ix.  Usage of Leaves ( July 2014 to June 2015)</h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>CL/SCL</th>
                                <th>ML</th>
                                <th>EL</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total leaves availed</td>
                                <td><input name="totalLeavesCLSCL1" class="myinput" type="number" id="totalLeavesCLSCL1" ng-model="fpaupdate.totalLeavesCLSCL1"></td>
                                <td><input name="totalLeavesML1" class="myinput" type="number" id="totalLeavesML1" ng-model="fpaupdate.totalLeavesML1"></td>
                                <td><input name="totalLeavesEL1" class="myinput" type="number" id="totalLeavesEL1" ng-model="fpaupdate.totalLeavesEL1"></td>
                                <td><input name="totalLeavesTotal1" class="myinput" type="number" id="totalLeavesTotal1" ng-model="fpaupdate.totalLeavesTotal1"></td>
                            </tr>
                            <tr>
                                <td>No of Occasions</td>
                                <td><input name="noOfOccasionsCLSCL1" class="myinput" type="number" id="noOfOccasionsCLSCL1" ng-model="fpaupdate.noOfOccasionsCLSCL1"></td>
                                <td><input name="noOfOccasionsML1" class="myinput" type="number" id="noOfOccasionsML1" ng-model="fpaupdate.noOfOccasionsML1"></td>
                                <td><input name="noOfOccasionsLeavesEL1" class="myinput" type="number" id="noOfOccasionsLeavesEL1" ng-model="fpaupdate.noOfOccasionsLeavesEL1"></td>
                                <td><input name="noOfOccasionsTotal1" class="myinput" type="number" id="noOfOccasionsTotal1" ng-model="fpaupdate.noOfOccasionsTotal1"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </div>
    <h2 class="heading" style="text-align: center">PART – II:  Activity-wise Quantitative Assessment by Faculty and HoD</h2>
    
    <div class="container"style="border: 1px solid black">
          <h5 class="heading">1.Subjects taken in both semesters of one academic year under reference have to be considered.</h5>
    <h5 class="heading">2.When a function/ activity is not uniquely 
quantifiable, score by self or HoD is expected to indicate the level / 
effectiveness of completion.</h5>
<h4 class="heading" style="color:red;">Facutly members are requested not leave any field under self column empty,please enter '0' if you dont have any information to fill in that particular column</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20px">S.No</th>
                    <th style="width:350px">Parameter</th>
                    <th style="width:150px">Scoring System</th>
                    <th style="width:150px">Brief write up, if not detailed in PART -I</th>
                    <th style="width:50px">Self</th>
                     <th style="width:50px">HOD</th>

                </tr>
            </thead>
            <tbody>
                <tr><td></td><td><h4 class="heading">A. Instruction related</h4></td> </tr>
                <tr>
                    <td>1</td>
                    <td>Lectures, Tutorials, Practicals, Seminars</td>
                    <td>60 (as % of all classes allotted)</td>
                    <td><textarea class="msd-elastic"name="partA1B" type="text"  id="partA1B" ng-model="fpaupdate.partA1B"></textarea></td>
                    <td><input type="number" name="partA1S" id="partA1S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA1S" required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Preparation &amp; Teaching effectiveness</td>
                    <td>5 / Th.subject</td>
                    <td><textarea class="msd-elastic" name="partA2B" type="text" id="partA2B" ng-model="fpaupdate.partA2B"></textarea></td>
                    <td><input name="partA2S" type="number" id="partA2S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partA2S"required title="Please Enter 0 if not applicable" ></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Remedial classes, extra coaching to backward students </td>
                    <td>10 for 10 periods / subject</td>
                    <td><textarea class="msd-elastic" name="partA3B" type="text" id="partA3B" ng-model="fpaupdate.partA3B"></textarea></td>
                    <td><input name="partA3S" type="number" id="partA3S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA3S"
required title="Please Enter 0 if not applicable" ></td>
<td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Exam related functions (paper- setting, evaluation, invigilation etc.)</td>
                    <td>20</td>
                    <td><textarea class="msd-elastic"name="partA4B" type="text" id="partA4B" ng-model="fpaupdate.partA4B"></textarea></td>
                    <td><input name="partA4S" type="number" id="partA4S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA4S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Innovative teaching practices, additional subject content (mention)</td>
                    <td>5 / subject</td>
                    <td><textarea class="msd-elastic" name="partA5B" type="text" id="partA5B" ng-model="fpaupdate.partA5B"></textarea></td>
                    <td><input name="partA5S" type="number" id="partA5S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA5S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maintenance of course files (Th/Drg.)</td>
                    <td>10 / subject</td>
                    <td><textarea class="msd-elastic" name="partA6B" type="text" id="partA6B" ng-model="fpaupdate.partA6B"></textarea></td>
                    <td><input name="partA6S" type="number" id="partA6S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA6S"required title="Please Enter 0 if not applicable" ></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Full availability in laboratory and interaction with students </td>
                    <td>10 / lab</td>
                    <td><textarea class="msd-elastic"name="partA7B" type="text" id="partA7B" ng-model="fpaupdate.partA7B"></textarea></td>
                    <td><input name="partA7S" type="number" id="partA7S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA7S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Evaluation of lab records - regular correction &amp; critical comments</td>
                    <td>10 / lab</td>
                    <td><textarea class="msd-elastic" name="partA8B" type="text" id="partA8B" ng-model="fpaupdate.partA8B"></textarea></td>
                    <td><input name="partA8S" type="number" id="partA8S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA8S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Assignments Given (2 per subject), &amp; Evaluation </td>
                    <td>10 / subject (Th/Drg)</td>
                    <td><textarea class="msd-elastic" name="partA9B" type="text" id="partA9B" ng-model="fpaupdate.partA9B"></textarea></td>
                    <td><input name="partA9S" type="number" id="partA9S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partA9S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Assignment problems worked out in class and test problems displayed </td>
                    <td>10 / subject (Th/Drg)</td>
                    <td><textarea class="msd-elastic" name="partA10B" type="text" id="partA10B" ng-model="fpaupdate.partA10B"></textarea></td>
                    <td><input name="partA10S" type="number" id="partA10S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA10S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Project Seminar  (all aspects)</td>
                    <td>20 / section</td>
                    <td><textarea class="msd-elastic"name="partA11B" type="text" id="partA11B" ng-model="fpaupdate.partA11B"></textarea></td>
                    <td><input name="partA11S" type="number" id="partA11S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA11S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Students Attendance </td>
                    <td>5 for 100% /subjct </td>
                    <td><textarea class="msd-elastic"name="partA12B" type="text" id="partA12B" ng-model="fpaupdate.partA12B"></textarea></td>
                    <td><input name="partA12S" type="number" id="partA12S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA12S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Results</td>
                    <td>10 for 100%/ subjct </td>
                    <td><textarea class="msd-elastic"name="partA13B" type="text" id="partA13B" ng-model="fpaupdate.partA13B"></textarea></td>
                    <td><input name="partA13S" type="number" id="partA13S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA13S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Improvement of Result in the subject handled (% reduction in failures)</td>
                    <td>10 for 50% &amp; more; per subject</td>
                    <td><textarea class="msd-elastic"name="partA14B" type="text" id="partA14B" ng-model="fpaupdate.partA14B"></textarea></td>
                    <td><input name="partA14S" type="number" id="partA14S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partA14S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="float: right">Sub Total:</td>
                    <td><input type="number" name="partASubTotal" id="partASubTotal"  ng-model="fpaupdate.partASubTotal" readonly="readonly"></td><td></td>
                </tr>
                <tr><td></td><td><h4 class="heading">B. Departmental, Student Activities </h4></td> </tr>
                <tr>
                    <td>1</td>
                    <td>Incharge Laboratory / Dept. Library </td>
                    <td>20 / each</td>
                    <td><textarea class="msd-elastic"name="partB1B" type="text" id="partB1B" ng-model="fpaupdate.partB1B"></textarea></td>
                    <td><input name="partB1S" type="number" id="partB1S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB1S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>College / dept. level committee member , incl. NBA/ISO etc. </td>
                    <td>10 / activity</td>
                    <td><textarea class="msd-elastic" name="partB2B" type="text" id="partB2B" ng-model="fpaupdate.partB2B"></textarea></td>
                    <td><input name="partB2S" type="number" id="partB2S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB2S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Coordinator: Timetable/ Alumni/ Pla-cement/Student Club/ Other major</td>
                    <td>10 / activity</td>
                    <td><textarea class="msd-elastic" name="partB3B" type="text" id="partB3B" ng-model="fpaupdate.partB3B"></textarea></td>
                    <td><input name="partB3S" type="number" id="partB3S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB3S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Compilation:  Attendance/ Internals /Student activities records</td>
                    <td>10 / activity /section </td>
                    <td><textarea class="msd-elastic"name="partB4B" type="text" id="partB4B" ng-model="fpaupdate.partB4B"></textarea></td>
                    <td><input name="partB4S" type="number" id="partB4S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB4S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Student Project coordinator UG /PG </td>
                    <td>20 / section</td>
                    <td><textarea class="msd-elastic"name="partB5B" type="text" id="partB5B" ng-model="fpaupdate.partB5B"></textarea></td>
                    <td><input name="partB5S" type="number" id="partB5S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB5S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Exam/ Acad/PG program Coord.(dept)</td>
                    <td>20</td>
                    <td><textarea class="msd-elastic"name="partB6B" type="text" id="partB6B" ng-model="fpaupdate.partB6B"></textarea></td>
                    <td><input name="partB6S" type="number" id="partB6S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partB6S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Student Counseling </td>
                    <td>10/batch of 20</td>
                    <td><textarea class="msd-elastic"name="partB7B" type="text" id="partB7B" ng-model="fpaupdate.partB7B"></textarea></td>
                    <td><input name="partB7S" type="number" id="partB7S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partB7S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Conduct of Festivals, Student activities including visits, tours</td>
                    <td>20-Convener; 10-Coord; 5- Member</td>
                    <td><textarea class="msd-elastic"name="partB8B" type="text" id="partB8B" ng-model="fpaupdate.partB8B"></textarea></td>
                    <td><input name="partB8S" type="number" id="partB8S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB8S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Class Coordinator </td>
                    <td>10 </td>
                    <td><textarea class="msd-elastic" name="partB9B" type="text" id="partB9B" ng-model="fpaupdate.partB9B"></textarea></td>
                    <td><input name="partB9S" type="number" id="partB9S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partB9S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="float: right">Sub Total:</td>
                    <td><input type="number" name="partBSubTotal"  id="partBSubTotal" ng-model="fpaupdate.partBSubTotal" readonly="readonly"></td><td></td>
                </tr>
                <tr><td></td><td><h4 class="heading">C. Consultancy, Student Projects, Outside Interaction,  Publications, Conferences  etc. </h4></td> </tr>
                <tr>
                    <td>1</td>
                    <td>Project guidance - UG </td>
                    <td>15; 30 for 2 or more</td>
                    <td><textarea class="msd-elastic"name="partC1B" type="text" id="partC1B" ng-model="fpaupdate.partC1B"></textarea></td>
                    <td><input name="partC1S" type="number" id="partC1S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC1S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Project Guidance - PG</td>
                    <td>15; 30 for 2 or more</td>
                    <td><textarea class="msd-elastic"name="partC2B" type="text" id="partC2B" ng-model="fpaupdate.partC2B"></textarea></td>
                    <td><input name="partC2S" type="number"id="partC2S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC2S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Participation in mini projects, student competitions</td>
                    <td>10; 20 for 2 or more</td>
                    <td><textarea class="msd-elastic"name="partC3B" type="text" id="partC3B" ng-model="fpaupdate.partC3B"></textarea></td>
                    <td><input name="partC3S" type="number" id="partC3S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC3S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Industrial, Consultancy Project( L – Rs. in lakhs)</td>
                    <td>4 x L ; 4 &lt; 1 L</td>
                    <td><textarea class="msd-elastic"name="partC4B" type="text" id="partC4B" ng-model="fpaupdate.partC4B"></textarea></td>
                    <td><input name="partC4S" type="number" id="partC4S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partC4S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Industry Interaction for projects, placements, minor consultancy</td>
                    <td>10/activity/industry </td>
                    <td><textarea class="msd-elastic"name="partC5B" type="text" id="partC5B" ng-model="fpaupdate.partC5B"></textarea></td>
                    <td><input name="partC5S" type="number"id="partC5S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partC5S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Application for AICTE/DST Project</td>
                    <td>10 / proposal</td>
                    <td><textarea class="msd-elastic"name="partC6B" type="text" id="partC6B" ng-model="fpaupdate.partC6B"></textarea></td>
                    <td><input name="partC6S" type="number"id="partC6S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC6S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Implementation of above projects upto specified time (max. 2 yrs) </td>
                    <td>10 / project</td>
                    <td><textarea class="msd-elastic"name="partC7B" type="text" id="partC7B" ng-model="fpaupdate.partC7B"></textarea></td>
                    <td><input name="partC7S" type="number" id="partC7S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC7S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Conduct of Classes for Outside Agencies</td>
                    <td>20 / course;
                        5– invited  lecture
                    </td>
                    <td><textarea class="msd-elastic"name="partC8B" type="text" id="partC8B" ng-model="fpaupdate.partC8B"></textarea></td>
                    <td><input name="partC8S" type="number" id="partC8S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partC8S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Arranging expert lectures, visits</td>
                    <td>10 / semester </td>
                    <td><textarea class="msd-elastic"name="partC9B" type="text" id="partC9B" ng-model="fpaupdate.partC9B"></textarea></td>
                    <td><input  type="number"  ng-model="fpaupdate.partC9S" required title="Please Enter 0 if not applicable"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Coordinating major works of other  colleges  or Univ. </td>
                    <td>10 / activity </td>
                    <td><textarea class="msd-elastic"name="partC10B" type="text" id="partC10B" ng-model="fpaupdate.partC10B"></textarea></td>
                    <td><input  name="partC10S" type="number" id="partC10S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC10S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="float: right">Sub Total:</td>
                    <td><input type="number"
      name="partCSubTotal" id="partCSubTotal" ng-model="fpaupdate.partCSubTotal" readonly="readonly">
</td><td></td>
                </tr>
<tr><td></td><td><h4 class="heading">D. Publications, Conferences  etc.</h4></td> </tr>
                <tr>
                <tr>
                    <td>1</td>
                    <td>Books published  (Reputed/other)</td>
                    <td>50/20</td>
                    <td><textarea class="msd-elastic"name="partC11B" type="text" id="partC11B" ng-model="fpaupdate.partC11B"></textarea></td>
                    <td><input name="partC11S" type="number" id="partC11S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC11S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chapter in books /handbook</td>
                    <td>15 / chapter </td>
                    <td><textarea class="msd-elastic"name="partC12B" type="text" id="partC12B" ng-model="fpaupdate.partC12B"></textarea></td>
                    <td><input name="partC12S" type="number" id="partC12S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC12S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Journal publications </td>
                    <td>20-Internl; 10- Natl. </td>
                    <td><textarea class="msd-elastic"name="partC13B" type="text" id="partC13B" ng-model="fpaupdate.partC13B"></textarea></td>
                    <td><input name="partC13S" type="number" id="partC13S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC13S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Conference papers- full publication   in proceedings </td>
                    <td>10 –Intl./Natl.; Presentation -5</td>
                    <td><textarea class="msd-elastic" name="partC14B" type="text" id="partC14B" ng-model="fpaupdate.partC14B"></textarea></td>
                    <td><input name="partC14S" type="number" id="partC14S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC14S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dept. monographs, Manuals, etc.</td>
                    <td>10</td>
                    <td><textarea class="msd-elastic"name="partC15B" type="text" id="partC15B" ng-model="fpaupdate.partC15B"></textarea></td>
                    <td><input name="partC15S" type="number" id="partC15S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC15S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dept. seminar on current topic to faculty / students </td>
                    <td>10 / each</td>
                    <td><textarea class="msd-elastic" name="partC16B" type="text" id="partC16B" ng-model="fpaupdate.partC16B"></textarea></td>
                    <td><input name="partC16S" type="number" id="partC16S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partC16S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Attending Refresher Courses, Workshops, Conf. etc. </td>
                    <td>15-2 Weeks;10 -  1Week; 5- 1to3 days </td>
                    <td><textarea class="msd-elastic"name="partC17B" type="text" id="partC17B" ng-model="fpaupdate.partC17B"></textarea></td>
                    <td><input name="partC17S" type="number" id="partC17S" oninvalid="InvalidMsg(this);"ng-model="fpaupdate.partC17S"required title="Please Enter 0 if not applicable" ></td><td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Conduct of Seminars, Conferences</td>
                    <td>20-Convenor;10- Coord; 5-Member</td>
                    <td><textarea class="msd-elastic"name="partC18B" type="text" id="partC18B" ng-model="fpaupdate.partC18B"></textarea></td>
                    <td><input name="partC18S" type="number" id="partC18S"oninvalid="InvalidMsg(this);" ng-model="fpaupdate.partC18S" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Training for Engg. Services / GATE </td>
                    <td>10 - 10 periods </td>
                    <td><textarea class="msd-elastic"name="partC19B" type="text" id="partC19B" ng-model="fpaupdate.partC19B"></textarea></td>
                    <td><input name="partC19S" type="number" id="partC19S" ng-model="fpaupdate.partC19S"oninvalid="InvalidMsg(this);" required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="float: right">Sub Total:</td>
                    <td><input type="number" name="partDSubTotal" id="partDSubTotal" ng-model="fpaupdate.partDSubTotal" readonly="readonly"></td><td></td>
                </tr>
                <tr><td></td><td><h4 class="heading">E. Student Feedback</h4></td> </tr>
                <tr>
                    <td>1</td>
                    <td>Student Opinion Poll Rating (R )</td>
                    <td>3R-32; 0 for R&lt;12</td>
                    <td><textarea class="msd-elastic"name="partE1B" type="text" id="partE1B" ng-model="fpaupdate.partE1B"></textarea></td>
                    <td><input name="partE18S" type="number" id="partE18S" ng-model="fpaupdate.partE18S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rating in Course-monitoring -Good</td>
                    <td>5 per subject</td>
                    <td><textarea class="msd-elastic"name="partE2B" type="text" id="partE2B" ng-model="fpaupdate.partE2B"></textarea></td>
                    <td><input name="partE2S" type="number" id="partE2S" ng-model="fpaupdate.partE2S"required title="Please Enter 0 if not applicable"></td><td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="float: right">Sub Total:</td>
                    <td><input type="number" name="partESubTotal"  id="partESubTotal" ng-model="fpaupdate.partESubTotal"  readonly="readonly"></td><td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div  class="container"style="border:1px solid black">
        <h3 class="heading">xi. Overall Assessment : (from Part-II)</h3>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70px;">S. No</th>
                        <th>Criterion</th>
                        <th>% Weightage for Criterion Assistant Professor / Professor /Asc. Prof.(a)</th>
                        
                        <th>Maximum  score for criterion AP/P or Asc.P. (b)</th>
                        <th>Self Assessment  (C)</th>
                        <th>a*c/b</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>Instruction Related</td>
                        <td><span id="instructionPercentage" ng-model="fpaupdate.instructionPercentage">{{fpaupdate.value1}}</span></td>
                      
                        <td><span id="instructionMaxScore" ng-model="fpaupdate.instructionMaxScore">{{fpaupdate.value6}}</span></td>
                        <td><span name="instructionRelatedScoreSelf"  id="instructionRelatedScoreSelf" >{{fpaupdate.partASubTotal}}</span></td>
                        <td><input type="text"style="border:0;"  name="instructionRelatedScoreCacl"  id="instructionRelatedScoreCacl" ng-model="fpaupdate.instructionRelatedScoreCacl | number:0" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>Departmental, Student Activities</td>
                        <td><span id="departmentalPercentage" ng-model="fpaupdate.departmentalPercentage">{{fpaupdate.value2}}</span></td>
                        
                        <td><span id="departmentalMaxScore" ng-model="fpaupdate.departmentalMaxScore">{{fpaupdate.value7}}</span></td>
                        <td><span name="departmentalRelatedScoreSelf"  id="departmentalRelatedScoreSelf" ng-model="fpaupdate.departmentalRelatedScoreSelf">{{fpaupdate.partB1S+fpaupdate.partB2S+fpaupdate.partB3S+fpaupdate.partB4S+fpaupdate.partB5S+fpaupdate.partB6S+fpaupdate.partB7S+fpaupdate.partB8S+fpaupdate.partB9S}}</span></td>
                        <td><input type="text"style="border:0;"  name="departmentalRelatedScoreCacl" id="departmentalRelatedScoreCacl" ng-model="fpaupdate.departmentalRelatedScoreCacl | number:0" readonly="readonly"></td>
                    </tr>
<tr>
                        <td>C</td>
                        <td>Consultancy, Projects etc. </td>
                        <td><span id="consultancyPercentage" ng-model="fpaupdate.consultancyPercentage">{{fpaupdate.value3}}</span></td>
                       
                        <td><span id="consultancyMaxScore" ng-model="fpaupdate.consultancyMaxScore">{{fpaupdate.value8}}</span></td>
                        <td><span name="consultancyRelatedScoreSelf"  id="consultancyScoreSelf" ng-model="fpaupdate.consultancyRelatedScoreSelf" >{{fpaupdate.partC1S+fpaupdate.partC2S+fpaupdate.partC3S+fpaupdate.partC4S+fpaupdate.partC5S+fpaupdate.partC6S+fpaupdate.partC7S+fpaupdate.partC8S+fpaupdate.partC9S+fpaupdate.partC10S}}</span></td>
                        <td><input type="text"style="border:0;"  name="consultanyRelatedScoreCacl" id="consultanyRelatedScoreCacl" ng-model="fpaupdate.consultanyRelatedScoreCacl | number:0"readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>Publications, Conferences etc.</td>
                        <td><span id="publicationPercentage" ng-model="fpaupdate.publicationPercentage">{{fpaupdate.value4}}</span></td>
                     
                        <td><span id="publicationMaxScore" ng-model="fpaupdate.publicationMaxScore">{{fpaupdate.value9}}</span></td>
                        <td><span  name="publicationRelatedScoreSelf"  id="publicationRelatedScoreSelf"  ng-model="fpaupdate.publicationRelatedScoreSelf" >{{fpaupdate.partC11S+fpaupdate.partC12S+fpaupdate.partC13S+fpaupdate.partC14S+fpaupdate.partC15S+fpaupdate.partC16S+fpaupdate.partC17S+fpaupdate.partC18S+fpaupdate.partC19S}}</span></td>
                        <td><input type="text" style="border:0;" name="publicationRelatedScoreCacl"   id="publicationRelatedScoreCacl" ng-model="fpaupdate.publicationRelatedScoreCacl | number:0" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td>Student Feedback</td>
                        <td><span id="studentFeedbackPercentage" ng-model="fpaupdate.studentFeedbackPercentage">{{fpaupdate.value5}}</span></td>
                       
                        <td><span id="studentFeedbackMaxScore" ng-model="fpaupdate.studentFeedbackMaxScore">{{fpaupdate.value10}}</span></td>
                        <td><span name="studentFeedbackRelatedScoreSelf"  id="studentFeedbackRelatedScoreSelf" ng-model="fpaupdate.studentFeedbackRelatedScoreSelf">{{fpaupdate.partE2S+fpaupdate.partE18S}}</span></td>
                        <td><input type="text"style="border:0;"  name="studentFeedbackRelatedScoreCacl"id="studentFeedbackRelatedScoreCacl" ng-model="fpaupdate.studentFeedbackRelatedScoreCacl | number:0"readonly="readonly" ></td>
                    </tr>
                    
                     <tr>
                        <td></td>
                        <td>Total</td>
                        <td>100</td>
                       
                        <td></td>
                        <td></td>
                        <td><span style="border:0;" name="totalScoreCacl"id="totalScoreCacl" ng-model="fpaupdate.totalScoreCacl" >{{fpaupdate.instructionRelatedScoreCacl+fpaupdate.departmentalRelatedScoreCacl+fpaupdate.consultanyRelatedScoreCacl+fpaupdate.publicationRelatedScoreCacl+fpaupdate.studentFeedbackRelatedScoreCacl | number:0}}</span></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td>*Central functions</td>
                        <td><select class="form-control" ng-model="fpaupdate.centralfunctions"><option value="0">None</option>
                         <option value="10">Maintenance</option><option value="10">Exam</option><option value="10">Alumni</option><option value="10">Scholarship</option><option value="10">Academic</option><option value="10">Networking</option><option value="10">Website</option><option value="10">PG-Courses</option><option value="10">Placements</option><option value="10">Stationery</option><option value="10">I Year W/S</option><option value="10">Security</option><option value="10">Transport</option>
                     <option value="10">Newsletter</option><option value="10">Brochure</option> </select></td>
                       
                        <td></td>
                        <td></td>
                        <td><span name="centralFunctionScoreCacl"id="centralFunctionScoreCacl" ng-model="fpaupdate.centralFunctionScoreCacl" >{{fpaupdate.centralfunctions}}</span></td>
                    </tr>
<tr>
                        <td></td>
                        <td>*Central functions</td>
                        <td><select class="form-control" ng-model="fpaupdate.centralfunctions1"><option value="0">None</option><option value="5">ISTE</option><option value="5">CSI</option><option value="5">IEEE</option><option value="5">Timetable </option><option value="5">NBA</option><option value="5">ISO</option></select></td>
                       
                        <td></td>
                        <td></td>
                        <td><span name="centralFunctionScoreCacl"id="centralFunctionScoreCacl" ng-model="fpaupdate.centralFunctionScoreCacl" >{{fpaupdate.centralfunctions1}}</span></td>
                    </tr>
                </tbody>
            </table>
            <h5 class="heading">If c&gt;b, take c/b =1</h5>

</h5>

        </div>
    </div> 
    <div  style="padding-top: 20px;">
        <div class="row" style="height: 200px">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="buttons">
                <div class="col-md-4"><button type="button" class="btn btn-primary btn-lg" id="save">Save</button></div>
                <div class="col-md-4"><button type="submit" class="btn btn-success btn-lg" id="submit">Submit</button></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</form>
<div id="loading"></div>
</body>
<script src="js/jquery-ui.min.js"></script>
<script>
 $(function() {
    $( ".date" ).datepicker();
  });
function InvalidMsg(textbox) {
    if (!$(textbox).val()) {
        textbox.setCustomValidity('Please Enter 0 If not applicable');
    }
    else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter number only');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
    
}
     $( "#save" ).click(function() {
        
		
    var dom_el = document.querySelector('[ng-controller="myCtrl"]');
    var ng_el = angular.element(dom_el);
    var ng_el_scope = ng_el.scope();
    var fpadata = ng_el_scope.fpaupdate;
    var uid='<?php echo $mongoid; ?>';
    json1=JSON.stringify(fpadata);
    $.ajax({
                url: 'https://api.mongolab.com/api/1/databases/fpa/collections/fpa?apiKey=_e_-nVcEnScPNXtJaUbvEfOvjVYLoG1h',
                         data: json1,
                         type: "POST",
                         contentType: "application/json"}
                     ).success(function(returnedData) {
                         var id=returnedData._id["$oid"];
                          if(uid){
                          alert("updated");
}
else{
                          storedata(id);
}
                     });


	
   
});
function storedata(item){
var uid=item;
$.ajax({
                url: 'save.php?action=save&id='+uid,
                         
                         type: "POST",
                         contentType: "application/json"}
                     ).success(function(data) {
                          if(data){
                                 alert("updated");
                    
				}
                     });


}
 $( "#submit" ).click(function() {
    if (confirm("After Submission your not allowed to edit form.Press OK if all required fileds entred!") == true) {
        
   var form1 = document.getElementById('fpaForm');
        form1.onsubmit = function(event) {
		event.preventDefault();
    var dom_el = document.querySelector('[ng-controller="myCtrl"]');
    var ng_el = angular.element(dom_el);
    var ng_el_scope = ng_el.scope();
    var fpadata = ng_el_scope.fpaupdate;
    json1=JSON.stringify(fpadata);
    $.ajax({
                url: 'https://api.mongolab.com/api/1/databases/fpa/collections/fpa?apiKey=_e_-nVcEnScPNXtJaUbvEfOvjVYLoG1h',
                         data: json1,
                         type: "POST",
                         contentType: "application/json"}
                     ).success(function(returnedData) {
                         var id=returnedData._id["$oid"];
                          storedata1(id);
                     });


	
	};
    } else {
       return false;
    }
    
   
});
function storedata1(item){
var uid=item;
$.ajax({
                url: 'save.php?action=submit&id='+uid,
                         data: {"id":uid},
                         type: "POST",
                         contentType: "application/json"}
                     ).success(function(data) {
                          
                         location.reload();
                    
				
                     });


}
</script>


</html>
