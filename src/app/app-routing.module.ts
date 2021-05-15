import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BusinessComponent } from './business/business.component';
import { TechnologyComponent } from './technology/technology.component';
import { TopheadingComponent } from './topheading/topheading.component';

const routes: Routes = [

  {path:'', component:TopheadingComponent}, //home 
  {path:'tech', component:TechnologyComponent}, //technology
  {path:'business', component:BusinessComponent} //business
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
