@extends('layouts.admin')

@section('content')
<div class="row justify-content-center" >
	<div class="col-md-12">
		<h4 class="h4 text-info text-capitalize  text-center">Hello {{$user->name}}. Read throught the manual for Help</h4>
		<div class="card">
			<div class="card-body">
				
				<h5 class="text-dark text-info font-weight-bold">Table of Contents</h5>

				<ul id="TableOfContents">
					<li><a href="#Articles">Articles</a></li>
					<li><a href="#WebsiteGallery">Website Gallery</a></li>
					<li><a href="#NewsDesk">News Desk</a></li>					
					<li><a href="#Schedules">Schedules</a></li>
					<li><a href="#Messages">Messages</a></li>
					<li><a href="#Admins">Admins</a></li>
				</ul>




			</div>
		</div>
	</div>
</div>

<div class="row justify-content-center mt-5" id="Articles">
					<div class="col-md-3">
						<img src="{{asset('/img/articlesmenu.png')}}" alt="Articles Menu" class="img-fluid mt-2 ">
					</div>
					<div class="col-md-9">
						<h3 class="h3 font-weight-bold text-info">Articles</h3>
						<div>The Article is a menu item on the admin dashboard.
						It`s submenus include
						<ol>
							<li><a href="/admin/createArticle" title="New Article link" class="card-link text-info">New:</a>
								<p>Use the <kbd>New</kbd> link to create new articles. The articlcan be accessed by the public from the <a href="/aword" target="_blank">A Word</a> setion of our website. Write creative and catchy articles that are christian based to  keep a live audience of our website</p>
								<p>When you click the link a blank work area where you need to create your article. The work area looks as below. </p>
								<img src="{{asset('/img/newarticle.png')}}" alt="" class="img-fluid w-75 mb-1 mt-1">
								<p>The <strong>Title</strong> should be a catcchy line less than twent words that shows highlights the article you create</p>
								<p>The <strong>Blank work area </strong> is the working space where you create the actual image. You are freee to be as creative as possible. When working with images or audio, we advise you to use images on other servers and just use the links. You can use youtubr links for videos and google photos links for photos. This approach helps reduce the load on our application</p>
								<p>After you are contented that your article looks good, click the save button below the work area</p>
								<p>By default articles are <strong>Not aprroved</strong> when saved. and therby not visible by the public</p></li>
							<li><a href="">view all Approved</a>
								<p>This is the second button on the Articles section</p>
								<p>This is used after you have created your articles. By default you cannot approve your own article. When another admin as read your article he/she can the approve it and allow you to show ot on the website. Visit the link to see all articles on the system that have been approved.</p>
								<p>Approved articles visible on the website also attract public comments. The link will also allow you see the comments. and incase a comment seems offending you can take them down. Use the guide <a href="#TakeCommentsDown">here</a></p>
								<p>Also, visit the link to see what other admins have written and approve their content.</p>
							</li>
							<li><a href="">View un Approved Articles</a>
								<p>Immediately articles are created, as mentioned earlier, their state is <strong>UnApprovced</strong>. You can click the link above to view all the articles that are seeing approval from you.
									On the page you get after clicking the link, click on the <kbd>Approve</kbd> button to approve it. We are currently working on rewarding admins with most approvals with tickets and pefa badges used to get exclusive rights on content you create and the audience grown.</p>
							</li>
						</ol>
					</div>
					</div>
</div>

<div class="row justify-content-center mt-5" id="WebsiteGallery">
	<div class="col-md-3">
		<img src="{{asset('img/gallerymenu.png')}}" alt="" class="img-fluid mt-2">
	</div>
	<div class="col-md-9">
		<h4 class="h3 font-weight-bold text-info">The Website Gallery</h4>
		<p>We are having a nice gallery available <a href="/gallery">Here</a>. It is controlled by a powerful backend that saves all image links on our database and stores nicely cropped images on the server. We crop and rename the images to prevent malicious images reaching our application.</p>
		<p>The gallery is controlled by only one button. We are currently only supporting uploads. We are working on the <kbd>Edit Image</kbd> and will be ready soon.</p>
		<p>Use the <kbd>New</kbd> to add new images to the gallery. Also give the images nice captions to provide relevance.</p>
		<p>An illustration of our upload form is as below
			<img src="{{asset('img/galleryupload.png')}}" alt="" class="img-fluid mt-2 w-75">
			The other button labelled <kbd>Gallery</kbd> redirects you to the actual gallery on a new browser window</p>
			<p>The gallery upload page requiresa caption which is used as the titile to the iage and also displayed on the page where our visitors get to see our photos</p>
	</div>
</div>

<div class="row justify-content-center mt-2 border border-bottom-0 border-left-0 border-right-0 border-info" id="NewsDesk">
	<div class="col-md-8">
		<h4 class="h3 font-weight-bold text-info">NewsDesk</h4>
		<p>The news desk is a section where our admins should use to write all the new happenings of the church and any chnages on the website. The news will appera on the website immediately and do not need approvals. The news also are supported for editing. The create and edit workspaces for te articles look the same. Image is as below.</p>
		<p><strong>The news pass some verification</strong> by the website and all writers should  be keen with the articles. </p>
		<p><strong>Fake News</strong> We strongly capmapign against sharing of fake news. Any news written on our website can be taken down any time we suspect it to be fake news. Also remember to cite sources from which you get your news.</p>
		<p>All the best.</p>
		<h5 class="text-info">All</h5>
		<p>The <kbd>All</kbd> link on the submenu under news is used when the admins wish to view all the news written by other users.</p>


	</div>
	<div class="col-md-4">
		<img src="{{asset('img/newsdesk.png')}}" alt="" class="img-fluid mt-2 ">
	</div>
</div>


<div class="row justify-content-center mt-2 border border-info border-left-0 border-right-0" id="Schedules">
<div class="col-md-4">
	<img src="{{asset('img/.png')}}" alt="" class="img-fluid mt-3">
</div>
<div class="col-md-8">
	<h4 class="h4 text-info font-weight-bold text-center">Schedules</h4>
	<p>Schedules are events that occur in the church within a week or planned events. The Schedules can be repeated weekly or may be once in a month, a year or so. Say a Jumbo sale or a fundraising or something else. Just a Scheduled Evennt.</p>
	<p>When creating a scedule, select the day of the week first then in the body description, Remeber the finer details such as where the veneu will be, The timing of events and other maor event details. </p>
	<p>With the support for ric text editng by our system, Make the event description as stunning as possible.</p>
	<p>A guide on how to use the rich text editor will be available soon</p>
	<p>Wen the schedule has been created it is visible to the public under the <strong>Weekly</strong> Page on our website. Click <a href="/weekly" target="_blank">here</a> to see </p>
	<h4 class="h4 font-weight-bold text-success">Editing Scheduled</h4>
	<p>After schedules are created, we allow for errors to be corrected and to  edit a schedule, ust click on the <strong>View & Edit</strong> button on the schedules section and find the green edit button. This will open the schedule on a new editor page and allow you to do edits.</p>
	<p>To delete a past schedule <strong>For dated schedules and events</strong> click the red delete button. The buttons only appear if you are the one that created the schedule. To delete a schedule you never created, just request the admin who created it by sending them an email. Anyting you delete on the site is permanently deleted and can`t be recoverd. We do this due to the hosting plan that limits our disk space. </p>
	<p>Explre</p>
</div>	
</div>
<div class="row justify-content-center mt-2 border border-info border-left-0 border-right-0" id="Messages">
<div class="col-md-4">
	<img src="{{asset('img/.png')}}" alt="" class="img-fluid mt-3">
</div>
<div class="col-md-8">
	<h4 class="h4 text-info font-weight-bold text-center">Messages</h4>
	<p>Mesages subsection, availabe by clicking the essages sub section on the left only handles messages that are sent by the users of our website. They send them as a contact us item from the contact us section of the website.</p>
	<p>Each message sent has a name of the sender, an email and the message they want</p>
	<h5>Accessing the New Messages</h5>
	<p>When a visitor visits our website, they are able to send us and when any admin logs in to the backend system, a new message counter on the top rigt of the dashboard counts.
		On clicking the message you land on the inbox and find the message with an option to reply to it or mark it as read. <strong>Only Mark messages as read when you think they are of less importance to other admins or when you have spolved the senders issue. All messages that you reply from the site get sent under the email admin@pefachurchnjiru.org</strong> Be rational and observe professionalism</p>
		<p>When Messages are marked as read they automatically get added to the <strong>Inclusive Inbox.</strong> To view such messages just click on the second button labeled <kbd>All inbox</kbd>. There we store all messages  ever sent to us from the newest to the oldest</p>
</div>	
</div>
<div class="row justify-content-center mt-2 border border-info border-left-0 border-right-0" id="Admins">
<div class="col-md-4">
	<img src="{{asset('img/.png')}}" alt="" class="img-fluid mt-3">
</div>
<div class="col-md-8">
	<h4 class="h4 text-info font-weight-bold text-center">Admins</h4>
	<p>If you can read this you are an admin</p>
	<p>Admins are the only users allowed to interact with the system and conteol what the public can see when they visit the website <a href="pefachurchnjiru.org">pefachurchnjiru.org</a>. </p>
	<p>To view all admins just click the admins section on the left side bar</p>
	<p>To add a new admin click the Add new button on the admin section. When adding an admin, just add their emails as admin_code and save. Email or message them to us the email as admin code.</p>
	<p>Admin must be rational and potray a good image of pefachurchnjiru and always create content that meets our standards.</p>
</div>	
</div>
<div class="row justify-content-center mt-2 border border-info border-left-0 border-right-0" id="">
<div class="col-md-4">
	<img src="{{asset('img/.png')}}" alt="" class="img-fluid mt-3">
</div>
<div class="col-md-8">
	<h3 class="h3 text-info font-weight-bold text-center">Others</h3>
	<h4>Security</h4>
	<p>Our website runs on safaricom servers and we have a disk space of 500Mb. This means we cant allow users to create accounts on our system to prevent running out of space.</p>
	<p>For user security our website is built on <a href="https://laravel.com" target="_blank">Laravel</a>. Laravel is a powerful php framework. It emphasizes on clean code and built for security. We encrypt all passwords and even the developer cant know nor guess your password. </p>
	<p>To prevent you from getting loged out all the time, Our sesiions are set to expire after two hours of no browser activity.  After finishing doing your stuff, Always log out to keep your security. </p>
	<p>Can your Pefa Account get Hacked?</p>
	<p>Definately No. You are the only one who has the password to your account.</p>
	<h4>Profile</h4>
	<p>Upon creating your account you get a profile as a PEFA admin. To cnge your profile, click on your account photo on the top right next to your name and click profile. Edit your bio and save it. You can also change your photo as you wish. Upon changing your photo, your recent profile photo is deleted from the server.</p>
	


</div>	
</div>
@endsection