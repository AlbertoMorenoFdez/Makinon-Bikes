import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TraerNombreComponent } from './traer-nombre.component';

describe('TraerNombreComponent', () => {
  let component: TraerNombreComponent;
  let fixture: ComponentFixture<TraerNombreComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TraerNombreComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(TraerNombreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
