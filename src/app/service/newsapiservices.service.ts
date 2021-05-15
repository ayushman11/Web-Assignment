import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class NewsapiservicesService {

  constructor(private _http:HttpClient) { }

  //Newsapi URL
  newsApiUrl = "https://newsapi.org/v2/top-headlines?country=in&apiKey=c78a894deeef443fa5e13e4d2267dd6c"

  //TechnologyApi URL
  technologyApiUrl = "https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=c78a894deeef443fa5e13e4d2267dd6c";

  //BusinessApi URL
  businessApiUrl = "https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=c78a894deeef443fa5e13e4d2267dd6c";
  //topheading()
  topHeading():Observable<any>
  {
    return this._http.get(this.newsApiUrl);
  }
  //technologyNews()
  technologyNews():Observable<any>
  {
    return this._http.get(this.technologyApiUrl);
  }
  //businessNews()
  businessNews():Observable<any>
  {
    return this._http.get(this.businessApiUrl);
  }



}
