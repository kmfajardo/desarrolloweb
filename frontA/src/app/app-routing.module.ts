import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ComienzoComponent } from './componets/comienzo/comienzo.component';
import { DashbordComponent } from './componets/dashbord/dashbord.component';
import { AddComponent } from './Persona/add/add.component';
import { EdditComponent } from './Persona/eddit/eddit.component';
import { ListComponent } from './Persona/list/list.component';

const routes: Routes = [
  {path: '', redirectTo: 'comienzo', pathMatch: 'full'},
  {path: 'comienzo', component: ComienzoComponent},
  {path: 'dashbord', component: DashbordComponent},
  {path: 'listar', component: ListComponent},
  {path: 'insertar', component: AddComponent},
  {path: 'editar', component: EdditComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
