<?php
error_reporting(0);
session_start();
//color
$res="\033[0m";
$red="\033[0;31m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$blue="\033[0;36m";
$white= "\033[0;37m";  
$banner="\r
\033[0;32m               
           \033[1;92m
               ╔🌟════════════════════════════════════════════════════════╗
                     TRI ATMOKO TOOL TRAODOISUB VERSION 9.0
               ╚════════════════════════════════════════════════════════🌟╝
                               
                            ╭───────────────────────────────────╮
                               [🌸]🔴 My Name's: TRI ATMOKO ( EKO )
                               [🌸]🔴 Youtube:   -
                                 ‹—•—•—•—•—•—🌸—•—•—•—•—•—›
                               [🌸]🔵 Tool: TRAODOISUB.         
                               [🌸]🔵 Tool: GB FOLLOWERS.
                               [🌸]🔵 Aplikasi: KHUSUS FACEBOOK.
                            ╰───────────────────────────────────╯
\n";
//config
{echo $green."🌺TRI ATMOKO TOOL TRAODOISUB FOLLOWERS VERSION 9.0🌺\n$ress";
sleep(1);
@system('clear');
sleep(0,3);
$listnv = [];
echo $white."-------------------------------------------------------------------\n\n";
echo $white."🌺 USERNAME TDS: $green";
$_SESSION["username"]=trim(fgets(STDIN));
echo $white."🌺 PASSWORD TDS: $green";
$_SESSION['password']=trim(fgets(STDIN));
echo $white."🌺 COOKIE FACEBOOK: $green";
$cookie=trim(fgets(STDIN));
echo"$res\n";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' TRI ATMOKO');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
sleep(1);
@system('clear');
echo $banner;
if ($source != 1 && $source != ''){
	echo $green."LOGIN SUKSES BRO\n\n";
	$user = $_SESSION["username"];
	echo $white."🌸 SELAMAT DATANG\033[0;32m ".$user." \033[0;37mSILAHKAN PILIH TOOLSNYA:\n\n";
	echo $white."🌸 MISI LIKE POSTINGAN: $green";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'like');
		echo $white."🌸 WAKTU MENJALANKAN MISI ( MIN 1 DETIK ): $green";
		$_SESSION['delaylike']=trim(fgets(STDIN));
		if($_SESSION['delaylike'] < 1)
		{exit($red."Minimal 1 Detik Boss\n");}
	}
	echo $white."🌸 MISI FOLLOW PROFIL: $green";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'sub');
		echo $white."🌸 WAKTU MENJALANKAN MISI ( MIN 1 DETIK ): $green";
		$_SESSION['delaysub']=trim(fgets(STDIN));
		if($_SESSION['delaysub'] < 1)
		{exit($red."Minimal 1 Detik Boss\n");}
	}
	echo $white."🌸 MISI TULIS KOMENTAR: $green";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'cmt');
		echo $white."🌸 WAKTU MENJALANKAN MISI ( MIN 1 DETIK ): $green";
		$_SESSION['delaycmt']=trim(fgets(STDIN));
		if($_SESSION['delaycmt'] < 1)
		{exit($red."Minimal 1 Detik Boss\n");}
	}
	echo $white."🌸 MISI MENYUKAI HALAMAN: $green";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'page');
		echo $white."🌸 WAKTU MENJALANKAN MISI  ( MIN 1 DETIK ): $green";
		$_SESSION['delaypage']=trim(fgets(STDIN));
		if($_SESSION['delaypage'] < 1)
		{exit($red."Minimal 1 Detik Boss\n");}
	}
	echo $white."🌸 MISI REACTION POSTINGAN: $green";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'cx');
		echo $white."🌸 WAKTU MENJALANKAN MISI ( MIN 1 DETIK ): $green";
		$_SESSION['delaycx']=trim(fgets(STDIN));
		if($_SESSION['delaycx'] < 1)
		{exit($red."Minimal 1 Detik Boss\n");}
	}
	if (count($listnv) == 0){exit($red."PILIH SETIDAKNYA 1 MISI");}

	echo $white."🌸 WAKTU PERGANTIAN MISI AGAR TIDAK CHECKPOINT ( MINIMAL 10 DETIK ): $green";
	$_SESSION['j']=trim(fgets(STDIN));
	if($_SESSION['j'] < 10)
	{exit($red."Minimal 10 Detik Boss\n");}
	echo $white."🌸 JUMLAH YG DI INGINKAN: $green";
	$_SESSION['i']=trim(fgets(STDIN));
	if($_SESSION['i'] < 1)
	{exit($red."Minimal 1 Keinginan\n");}
}else{
	exit($red."GAGAL LOGIN, PERIKSA USERNAME TDS DAN PASSWORD TDS");
}
echo $white."-------------------------------------------------------------------\n\n";
#get_token
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{
	exit($red."KODE COOKIE KADALUARSA");
}
$h = datnick($user,$idfb);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
if ($h == '1'){
		$i=1;
		@system('clear');
		while ($i <= $_SESSION['i']){
			$rand = $listnv[array_rand($listnv,1)];
			if ($rand == 'like'){
				$list = getnv('like',$user);
				$check = count($list);
				if ($check == 0){echo $red."MISI HABIS\n"; $i++; continue;}
				echo $green."🌸 MISI DITEMUKAN ".$check." LIKE POSTINGAN\n\n";
				foreach ($list  as $id) {
					$g = like($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."AKSES MENYUKAI POSTINGAN DI BLOCKIR\n");
					}
					$s = nhantien('like',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 200; echo $blue."[$stt] $white 🌸 $green [POST] $white 🌸 $green ".$id." $white 🌸 $green + 200 $white 🌸 $yellow ".$xu." ";}
					echo "\n";
					sleep($_SESSION['delaylike']);
				}
			}else if($rand == 'sub'){
				$list = getnv('follow',$user);
				$check = count($list);
				if ($check == 0){echo $red."MISI AKHIR!\n"; $i++; continue;}
				echo $green."🌸 MISI DITEMUKAN ".$check." MISI FOLLOW PROFIL\n\n";
				foreach ($list  as $id) {
					$g = follow($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."AKSES FOLLOW DI BLOCKIR\n");
					}
					$s = nhantien('sub',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600;echo $blue."[$stt] $white 🌸 $green [FOLLOW] $white 🌸 $green ".$id." $white 🌸 $green + 600 $white 🌸 $yellow ".$xu." ";}
					echo "\n";
					sleep($_SESSION['delaysub']);
				}
			}else if($rand == 'page'){
				$list = getnv('likepage',$user);
				$check = count($list);
				if ($check == 0){echo $red."MISI AKHIR!\n"; $i++; continue;}
				echo $green."🌸 MISI DITEMUKAN ".$check." MISI MENYUKAI HALAMAN\n\n";
				foreach ($list  as $id) {
					page($id,$cookie);
					$s = nhantien('page',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600; echo $blue."[$stt] $white 🌸 $green [HALAMAN] $white 🌸 $green ".$id." $white 🌸 $green + 600 $white 🌸 $yellow ".$xu." ";}
					echo "\n";
					sleep($_SESSION['delaypage']);
				}
			}else if($rand == 'cx'){
				$list = getnv('camxuc',$user);
				$check = count($list);
				if ($check == 0){echo $red."MISI AKHIR!\n"; $i++; continue;}
				echo $green."🌸 MISI DI TEMUKAN ".$check." MISI REACTION POSTINGAN\n\n";
				foreach ($list  as $id => $key) {
					$id = $key->{'id'};
					$type = $key->{'type'};
					camxuc($id,$type,$cookie);
					$s = nhantiencx($type,$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 400; echo $blue."[$stt] $white 🌸 $green [$type] $white 🌸 $green ".$id." $white 🌸 $green + 400 $white 🌸 $yellow ".$xu." ";}
					echo "\n";
					sleep($_SESSION['delaycx']);
				}
			}
			else{
				$list = getnv('cmt',$user);
				$check = count($list);
				if ($check == 0){echo $red."MISI AKHIR!\n"; $i++; continue;}
				echo $green."🌸 MISI DI TEMUKAN ".$check." MISI BERKOMENTAR\n\n";
				foreach ($list  as $id => $key) {
					$uid = $key->{'id'};
					$msg = $key->{'nd'};
					$g = cmt($access_token,$uid,$cookie,$msg);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."AKSES BERKOMENTAR DI BLOCKIR\n");
					}
					$s = nhantien('cmt',$uid);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600; echo $blue."[$stt] $white 🌸 $green [KOMENTAR] $white 🌸 $green ".$id." $white 🌸 $green + 600 $white 🌸 $yellow ".$xu." ";}
					echo "\n";
					sleep($_SESSION['delaycmt']);
				}
			}
		$i++;
		echo $white."⏳ Vui lòng chờ ".$_SESSION['j']." DETIK:";
		echo $white."==========================================================================================================================\n\n";
		}
}else{exit($red."KONFIGURASI TETAP, TAMBAHKAN ID: ".$idfb." DI KONFIGURASI");}
}else{exit($red."COOKIE KADALUARSA");}
}
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function like($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function page($id,$cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}	
	curl_close($ch);

}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function getnv($loai,$user){
	$list = file_get_contents('https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
	return json_decode($list);
}
function datnick($user,$id){
	$xxx = file_get_contents('https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$id);
	return $xxx;
}
function nhantien($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function nhantiencx($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id, 'loaicx' => $loai);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}

?>
