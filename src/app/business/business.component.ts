import { Component, OnInit } from '@angular/core';
import {NewsapiservicesService} from '../service/newsapiservices.service';

@Component({
  selector: 'app-business',
  templateUrl: './business.component.html',
  styleUrls: ['./business.component.css']
})
export class BusinessComponent implements OnInit {

  constructor(private _services:NewsapiservicesService) { }

  businessnewsDisplay:any = [];

  ngOnInit(): void {

    this._services.businessNews().subscribe((result)=>{
      this.businessnewsDisplay = result.articles;
    })
  }

}
