# zee5-api

## Unofficial API for <tt>https://www.zee5.com/</tt><br><br>

### Works for movies and series<br><br>

#### **API Endpoints (method get):**<br><br>
*Request:*
for movies
```bash
https://localhost:8080/z5api.php?q=https://www.zee5.com/movies/details/geetha-govindam/0-0-7463
http://zee5api.herokuapp.com/z5api.php?q=https://www.zee5.com/movies/details/geetha-govindam/0-0-7463
```
*Request :*
for series provide specific episode link
```bash
https://localhost:8080/z5api.php?q=https://www.zee5.com/zee5originals/details/poison/0-6-1558/ep-2-place-your-bets/0-1-manual_6hmmiegg4l20
https://zee5api.herokuapp.com/z5api.php?q=https://www.zee5.com/zee5originals/details/poison/0-6-1558/ep-2-place-your-bets/0-1-manual_6hmmiegg4l20
```
*Response:*

```json
{
  "title": "Geetha Govindam",
  "description": "Geetha Govindam is a 2018 Telugu romantic comedy movie starring Vijay Deverakonda, Rashmika Mandanna and others. The story revolves around Vijay (Vijay Deverakonda) who falls in love with Geetha (Rashmika Mandanna) and does everything that he can do to impress her. Unfortunately, Geetha does not believe in his love and considers him to be an irresponsible person, who's always behind every woman. In the meanwhile, Vijay's sister gets engaged to Geetha's brother, making  the story all the more intersting! Will Vijay be able to prove his love to Geetha and impress her? Will Geetha accept Vijay's love?",
  "thumbnail": "https://akamaividz.zee5.com/resources/0-0-7463/list/270x152/1170x658withlog_1392188931.jpg",
  "video_url": "https://zee5vodnd.akamaized.net/hls/PRIORITY1080/TELUGU_MOVIES/GEETHA_GOVINDAM_TELUGU_MOVIE_te.mp4/index.m3u8?hdnea=st=1605351983~exp=1605354983~acl=/*~hmac=8f474fd8b1fe68fb6ca0f24c649ca6ede85065d1f6ea79ab6936d1cb04d8f1ad"
}
```
#### **Deploy**

- upload z5api.php file and enjoy
<br><br>

## Star this Repo if you Liked it ⭐⭐⭐

<p align="center"> <b>My Social</b></p>
<p align="center">
  <a href="https://www.instagram.com/manoj_narugula">
    <img alt="Instagram" width="30px" src="https://cdn.jsdelivr.net/npm/simple-icons@3.2.0/icons/instagram.svg" />
  </a>

  
</p>




