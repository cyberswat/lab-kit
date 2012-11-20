Lab Kit
=======

Standard project layout for most BRL WordPress Projects.

### Setup Instructions.

* Clone the repository <code>git clone https://github.com/blueriotlabs/lab-kit.git .</code>
* Initialize all the submodules <code>git submodule update --init --recursive</code>
* Remove the Lab-Kit remote. <code>git remote rm origin</code>
* Add the remote for your new project (pulled from the Beanstalk project) <code>git remote add origin [url]</code>
* Push to the new remote <code>git push origin master</code>

* Add your database settings. 
	* Local site: Duplicate <code>wp-config-sample.php</code> and rename <code>wp-config-sample.php</code>. <code>cp wp-config-sample.php wp-config-local.php</code> Add your local database settings. 
	* Live site:  Production settings should be added to wp-config.php
	
Done!