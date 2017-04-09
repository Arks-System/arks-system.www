import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule, JsonpModule } from '@angular/http';
import { RouterModule } from '@angular/router';

import { AppComponent } from './app.component';
import { TilesComponent } from './tiles/tiles.component';
import { ToolComponent } from './tool/tool.component';
import { RecruitComponent } from './recruit/recruit.component';
import { TeamComponent } from './team/team.component';
import { ArchiveComponent } from './archive/archive.component';

import { ArchiveService } from './archive.service';

@NgModule({
  declarations: [
    AppComponent,
    TilesComponent,
    ToolComponent,
    RecruitComponent,
    TeamComponent,
    ArchiveComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot([
      {
        path: 'tool',
        component: ToolComponent
      },
      {
        path: 'team',
        component: TeamComponent
      },
      {
        path: 'recruit',
        component: RecruitComponent
      },
      {
        path: 'archive',
        component: ArchiveComponent
      },
      {
        path: '',
        component: TeamComponent,
        pathMatch: 'full'
      }
      /*{
        path: '',
        redirectTo: '/tiles',
        pathMatch: 'full'
      }*/
    ]),
    FormsModule,
    HttpModule,
    JsonpModule
  ],
  providers: [
    ArchiveService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
