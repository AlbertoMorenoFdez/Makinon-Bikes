import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ErrorDialogoComponent } from './error-dialogo.component';

describe('ErrorDialogoComponent', () => {
  let component: ErrorDialogoComponent;
  let fixture: ComponentFixture<ErrorDialogoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ErrorDialogoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ErrorDialogoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
