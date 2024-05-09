import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ObtenerCitaComponent } from './obtener-cita.component';

describe('ObtenerCitaComponent', () => {
  let component: ObtenerCitaComponent;
  let fixture: ComponentFixture<ObtenerCitaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ObtenerCitaComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ObtenerCitaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
