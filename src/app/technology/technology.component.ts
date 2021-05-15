import { Component, OnInit } from '@angular/core';
import {NewsapiservicesService} from '../service/newsapiservices.service';

@Component({
  selector: 'app-technology',
  templateUrl: './technology.component.html',
  styleUrls: ['./technology.component.css']
})
export class TechnologyComponent implements OnInit {

  constructor(private _services:NewsapiservicesService) { }

  technologynewsDisplay:any = [];

  ngOnInit(): void {

    this._services.technologyNews().subscribe((result)=>{
      this.technologynewsDisplay = result.articles;
    })

  }

}
