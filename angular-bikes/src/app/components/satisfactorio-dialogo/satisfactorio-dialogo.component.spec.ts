import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SatisfactorioDialogoComponent } from './satisfactorio-dialogo.component';

describe('SatisfactorioDialogoComponent', () => {
  let component: SatisfactorioDialogoComponent;
  let fixture: ComponentFixture<SatisfactorioDialogoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SatisfactorioDialogoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(SatisfactorioDialogoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
