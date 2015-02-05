<?php
   require_once("../_private/githubWebhookKey.php");

/*
	date_default_timezone_set("America/Anchorage");
	$str = '{"ref":"refs/heads/master","before":"78e29e923656d69b2791e3d79d81e384231125c1","after":"7c8db390585b22b4ddba10882b6c1cdfae8c73c7","created":false,"deleted":false,"forced":false,"base_ref":null,"compare":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com/compare/78e29e923656...7c8db390585b","commits":[{"id":"7c8db390585b22b4ddba10882b6c1cdfae8c73c7","distinct":true,"message":"fixed data stream alignment","timestamp":"2014-12-18T11:38:25-09:00","url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com/commit/7c8db390585b22b4ddba10882b6c1cdfae8c73c7","author":{"name":"Jesse Victors","email":"jvictors@jessevictors.com","username":"Jesse-V"},"committer":{"name":"Jesse Victors","email":"jvictors@jessevictors.com","username":"Jesse-V"},"added":[],"removed":[],"modified":["assets/php/checkout/email_functions.php"]}],"head_commit":{"id":"7c8db390585b22b4ddba10882b6c1cdfae8c73c7","distinct":true,"message":"fixed data stream alignment","timestamp":"2014-12-18T11:38:25-09:00","url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com/commit/7c8db390585b22b4ddba10882b6c1cdfae8c73c7","author":{"name":"Jesse Victors","email":"jvictors@jessevictors.com","username":"Jesse-V"},"committer":{"name":"Jesse Victors","email":"jvictors@jessevictors.com","username":"Jesse-V"},"added":[],"removed":[],"modified":["assets/php/checkout/email_functions.php"]},"repository":{"id":19547059,"name":"AlaskaWildflowerHoney.com","full_name":"Jesse-V/AlaskaWildflowerHoney.com","owner":{"name":"Jesse-V","email":"Jesse-V@users.noreply.github.com"},"private":false,"html_url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com","description":"Website for Alaska Wildflower Honey","fork":false,"url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com","forks_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/forks","keys_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/keys{/key_id}","collaborators_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/collaborators{/collaborator}","teams_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/teams","hooks_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/hooks","issue_events_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/issues/events{/number}","events_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/events","assignees_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/assignees{/user}","branches_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/branches{/branch}","tags_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/tags","blobs_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/git/blobs{/sha}","git_tags_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/git/tags{/sha}","git_refs_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/git/refs{/sha}","trees_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/git/trees{/sha}","statuses_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/statuses/{sha}","languages_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/languages","stargazers_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/stargazers","contributors_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/contributors","subscribers_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/subscribers","subscription_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/subscription","commits_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/commits{/sha}","git_commits_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/git/commits{/sha}","comments_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/comments{/number}","issue_comment_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/issues/comments/{number}","contents_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/contents/{+path}","compare_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/compare/{base}...{head}","merges_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/merges","archive_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/{archive_format}{/ref}","downloads_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/downloads","issues_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/issues{/number}","pulls_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/pulls{/number}","milestones_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/milestones{/number}","notifications_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/notifications{?since,all,participating}","labels_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/labels{/name}","releases_url":"https://api.github.com/repos/Jesse-V/AlaskaWildflowerHoney.com/releases{/id}","created_at":1399490298,"updated_at":"2014-12-18T20:38:35Z","pushed_at":1418935115,"git_url":"git://github.com/Jesse-V/AlaskaWildflowerHoney.com.git","ssh_url":"git@github.com:Jesse-V/AlaskaWildflowerHoney.com.git","clone_url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com.git","svn_url":"https://github.com/Jesse-V/AlaskaWildflowerHoney.com","homepage":null,"size":4916,"stargazers_count":0,"watchers_count":0,"language":"JavaScript","has_issues":true,"has_downloads":true,"has_wiki":true,"has_pages":false,"forks_count":0,"mirror_url":null,"open_issues_count":13,"forks":0,"open_issues":13,"watchers":0,"default_branch":"master","stargazers":0,"master_branch":"master"},"pusher":{"name":"Jesse-V","email":"Jesse-V@users.noreply.github.com"},"sender":{"login":"Jesse-V","id":2314417,"avatar_url":"https://avatars.githubusercontent.com/u/2314417?v=3","gravatar_id":"","url":"https://api.github.com/users/Jesse-V","html_url":"https://github.com/Jesse-V","followers_url":"https://api.github.com/users/Jesse-V/followers","following_url":"https://api.github.com/users/Jesse-V/following{/other_user}","gists_url":"https://api.github.com/users/Jesse-V/gists{/gist_id}","starred_url":"https://api.github.com/users/Jesse-V/starred{/owner}{/repo}","subscriptions_url":"https://api.github.com/users/Jesse-V/subscriptions","organizations_url":"https://api.github.com/users/Jesse-V/orgs","repos_url":"https://api.github.com/users/Jesse-V/repos","events_url":"https://api.github.com/users/Jesse-V/events{/privacy}","received_events_url":"https://api.github.com/users/Jesse-V/received_events","type":"User","site_admin":false}}';

	//echo "INSERT INTO Github VALUES (".date('U').", '".$str."');";
	$db = new PDO("sqlite:../_private/sqlite.db");
	var_dump($db->errorInfo());
	$db->query("INSERT INTO Github VALUES (".date('U').", '".$str."');");
	var_dump($db->errorInfo());
*/

   $headers = getallheaders();
   if (!isset($headers['X-Hub-Signature']))
   {
      http_response_code(400);
      die("Invalid request");
   }

   $payload = file_get_contents('php://input');
   //$data    = json_decode($payload);

   $hubSignature = $headers['X-Hub-Signature'];
   list($algo, $hash) = explode('=', $hubSignature, 2);
   $payloadHash = hash_hmac($algo, $payload, $_WEBHOOK_KEY);

   if (!_secureStringCompare($hash, $payloadHash))
   {
      http_response_code(412);
      die("Bad secret");
   }

   try
   {
      date_default_timezone_set("America/Anchorage");
      $db = new PDO("sqlite:../_private/sqlite.db");
      $db->query("INSERT INTO Github VALUES (".date('U').", '".$payload."');");
      print_r($db->errorInfo());
   }
   catch (PDOException $e)
   {
      echo $e->getMessage();
   }

?>
