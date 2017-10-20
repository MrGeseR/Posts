import { NgModule } from '@angular/core';

import { AppRoutingModule } from '../app-routing.module';
import { AuthService } from '../auth/auth.service';
import { HeaderComponent } from './header/header.component';
import { CommonModule } from '@angular/common';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { MainComponent } from './main/main.component';

@NgModule({
    declarations: [
        HeaderComponent,
        MainComponent,
    ],
    imports: [
        AppRoutingModule,
        CommonModule,
        BrowserModule,
        RouterModule
    ],
    exports: [
        AppRoutingModule,
        HeaderComponent,

    ],
    providers: [
        AuthService,
    ],
})
export class CoreModule {}
