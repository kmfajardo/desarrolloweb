import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ComienzoComponent } from './comienzo.component';

describe('ComienzoComponent', () => {
  let component: ComienzoComponent;
  let fixture: ComponentFixture<ComienzoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ComienzoComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ComienzoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
