import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ComienzoComponent } from './componets/comienzo/comienzo.component';
import { DashbordComponent } from './componets/dashbord/dashbord.component';

const routes: Routes = [
  {path: '', redirectTo: 'comienzo', pathMatch: 'full'},
  {path: 'comienzo', component: ComienzoComponent},
  {path: 'dashbord', component: DashbordComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
