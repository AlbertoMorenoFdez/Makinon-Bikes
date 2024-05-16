'use strict'


//---------------------------Reproductor de Audio--------------------------------//
function playAudio() {
  document.getElementById('song').play();
  document.getElementById('play').style.display = 'none';
  document.getElementById('pause').style.display = 'inline-block';
}

function pauseAudio() {
  document.getElementById('song').pause();
  document.getElementById('pause').style.display = 'none';
  document.getElementById('play').style.display = 'inline-block';
}
function playAudioRes() {
  document.getElementById('song').play();
  document.getElementById('playRes').style.display = 'none';
  document.getElementById('pauseRes').style.display = 'inline-block';
}

function pauseAudioRes() {
 
  document.getElementById('song').pause();
  document.getElementById('pauseRes').style.display = 'none';
  document.getElementById('playRes').style.display = 'inline-block';
}

//----------------------------PLEGADO DE SVG PRIMERA PAGINA--------------------------------//


// document.querySelector('#boton').addEventListener('click', function () {
//   let poligono = document.getElementById('poligono');
//   let puntos = poligono.getAttribute('points').split(' ').map(p => p.split(',').map(Number));
//   let punto = { x: puntos[1][0], y: puntos[1][1] };

//   let animacion = anime.timeline({
//     easing: 'easeInOutSine',
//     update: function () {
//       puntos[1] = [punto.x, punto.y];
//       poligono.setAttribute('points', puntos.map(p => p.join(',')).join(' '));
//     }
//   });

//   if (window.innerWidth < 768) {
//     animacion
//       .add({
//         targets: punto,
//         x: 150, // Cambia los valores de destino según lo necesites
//         y: 600, // Cambia los valores de destino según lo necesites
//         round: 1,
//         duration: 2000
//       });
//   } else {
//     animacion
//       .add({
//         targets: punto,
//         x: 550, // Cambia los valores de destino según lo necesites
//         y: 600, // Cambia los valores de destino según lo necesites
//         round: 1,
//         duration: 2000
//       });
//   }
  


//   document.querySelector('#boton').style.opacity = '0';
//   document.querySelector('#efectoAparecer').style.opacity = '1';
// });
document.querySelector('#boton').addEventListener('click', function () {
  let poligono = document.getElementById('poligono');
  let puntos = poligono.getAttribute('points').split(' ').map(p => p.split(',').map(Number));
  let punto = { x: puntos[1][0], y: puntos[1][1] };

  let animacion = anime.timeline({
    easing: 'easeInOutSine',
    update: function () {
      puntos[1] = [punto.x, punto.y];
      poligono.setAttribute('points', puntos.map(p => p.join(',')).join(' '));
    },
    complete: function () {
      // Añadir un efecto de desvanecimiento más suave y visualmente interesante
      anime({
        targets: poligono,
        opacity: 0,
        scale: 0.5, // Reduce a la mitad el tamaño para un efecto de "desaparecer"
        translateY: 50, // Mueve el polígono 50px hacia abajo
        duration: 2000, // Duración más larga para un efecto más suave
        easing: 'easeInOutQuad'
      });
    }
  });

  if (window.innerWidth < 768) {
    animacion
      .add({
        targets: punto,
        x: 150, // Cambia los valores de destino según lo necesites
        y: 600, // Cambia los valores de destino según lo necesites
        round: 1,
        duration: 2000
      });
  } else {
    animacion
      .add({
        targets: punto,
        x: 550, // Cambia los valores de destino según lo necesites
        y: 600, // Cambia los valores de destino según lo necesites
        round: 1,
        duration: 2000
      });
  }

  document.querySelector('#boton').style.opacity = '0';
  document.querySelector('#efectoAparecer').style.opacity = '1';
});



//----------------------------GRAFICA SVG--------------------------------//
// Datos de ejemplo
var datos = [
  { mes: 'Enero', clientes: 0 },
  { mes: 'Marzo', clientes: 10 },
  { mes: 'Junio', clientes: 22 },
  { mes: 'Sept', clientes: 55 },
  { mes: 'Diciembre', clientes: 100 },
];
if (window.innerWidth < 1200) {
  if (window.innerWidth < 1000) {
    var margin = { top: 20, right: 20, bottom: 30, left: 50 },
      width = 400 - margin.left - margin.right,
      height = 300 - margin.top - margin.bottom;
  } else {
    
    var margin = { top: 20, right: 20, bottom: 30, left: 50 },
      width = 500 - margin.left - margin.right,
      height = 350 - margin.top - margin.bottom;
  }
} else {
  var margin = { top: 20, right: 20, bottom: 30, left: 50 },
    width = 600 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;
}

// Escalas
var x = d3.scaleBand().range([0, width]).padding(0.4),
  y = d3.scaleLinear().range([height, 0]);

// Crear el SVG
var svg = d3.select("#graficaCanvas").append("svg")
  .attr("width", width + margin.left + margin.right)
  .attr("height", height + margin.top + margin.bottom)
  .append("g")
  .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


// Definir el dominio de las escalas
x.domain(datos.map(function (d) { return d.mes; }));
y.domain([0, 100]); // Cambiar el dominio de y para que vaya de 0 a 100

// Crear el gráfico
var grafico = d3.line()
  .x(function (d) { return x(d.mes); })
  .y(function (d) { return y(d.clientes); });

// Crear el eje X
svg.append("g")
  .attr("transform", "translate(0," + height + ")")
  .call(d3.axisBottom(x))
  .selectAll("text")
  .style("fill", "gray"); // Texto del eje X en gris

// Crear el eje Y
svg.append("g")
  .call(d3.axisLeft(y).tickFormat(function (d) { return d + " M"; }))
  .selectAll("text")
  .style("fill", "gray"); // Texto del eje Y en gris


// Animar el gráfico
var currentIndex = 1;
function animar() {
  if (currentIndex <= datos.length) {
    var subconjunto = datos.slice(0, currentIndex);
    svg.selectAll("path").remove();
    svg.append("path")
      .datum(subconjunto)
      .attr("fill", "none")
      .attr("stroke", "orange")
      .attr("stroke-width", 1.5)
      .attr("d", grafico);
    currentIndex++;
    setTimeout(animar, 1000);
  }
}
// Reiniciar la animación cada 5 segundos
setInterval(function () {
  currentIndex = 1; // Reiniciar el índice
  svg.selectAll("path").remove(); // Eliminar el gráfico actual
  animar(); // Iniciar la animación de nuevo
}, 7000);
// Iniciar la animación
animar();

//----------------------------CARRUSEL DE IMAGENES--------------------------------//
const canvasElement1 = {
  canvas: document.getElementById('canvas1'),
  ctx: null,
  images: ['../multimedia/cliente1.jpg', '../multimedia/cliente2.jpg', '../multimedia/cliente3.jpg'],
  currentIndex: 0
};

const canvasElement2 = {
  canvas: document.getElementById('canvas2'),
  ctx: null,
  texts: ['"¡Increíble experiencia en Makinon Bikes! Encontré la bicicleta perfecta y el servicio al cliente fue excepcional."',
    '"¡Makinon Bikes es mi destino número uno para todo lo relacionado con bicicletas! Personal amable, productos de alta calidad y precios competitivos. ¡Altamente recomendado!"',
    '"No podría estar más feliz con mi compra en Makinon Bikes. El personal conocedor me ayudó a encontrar la bicicleta perfecta y me brindó un excelente servicio postventa. ¡Definitivamente volveré!"'],
  currentIndex: 0
};

canvasElement1.ctx = canvasElement1.canvas.getContext('2d');
canvasElement2.ctx = canvasElement2.canvas.getContext('2d');

drawImageWithFilter(canvasElement1);
changeText(canvasElement2);

// function drawImageWithFilter(element) {
//   const img = new Image();
//   img.src = element.images[element.currentIndex];
//   img.onload = function () {
//     element.ctx.clearRect(0, 0, element.canvas.width, element.canvas.height);
//     element.ctx.drawImage(img, 0, 0, element.canvas.width, element.canvas.height);
//     setTimeout(() => {
//       element.currentIndex = (element.currentIndex + 1) % element.images.length;
//       drawImageWithFilter(element);
//     }, 5000);
//   };
//   img.onerror = function () {
//     element.currentIndex = (element.currentIndex + 1) % element.images.length;
//     drawImageWithFilter(element);
//   };
// }
function drawImageWithFilter(element) {
  const img = new Image();
  img.src = element.images[element.currentIndex];
  img.onload = function () {
    element.ctx.clearRect(0, 0, element.canvas.width, element.canvas.height);

    // Calculate the scaling factor to cover the canvas without distortion
    const canvasAspect = element.canvas.width / element.canvas.height;
    const imgAspect = img.width / img.height;
    let drawWidth, drawHeight;

    if (canvasAspect > imgAspect) {
      drawWidth = element.canvas.width;
      drawHeight = drawWidth / imgAspect;
    } else {
      drawHeight = element.canvas.height;
      drawWidth = drawHeight * imgAspect;
    }

    const offsetX = (element.canvas.width - drawWidth) / 2;
    const offsetY = (element.canvas.height - drawHeight) / 2;

    element.ctx.drawImage(img, offsetX, offsetY, drawWidth, drawHeight);

    setTimeout(() => {
      element.currentIndex = (element.currentIndex + 1) % element.images.length;
      drawImageWithFilter(element);
    }, 5000);
  };
  img.onerror = function () {
    element.currentIndex = (element.currentIndex + 1) % element.images.length;
    drawImageWithFilter(element);
  };
}

function changeText(element) {
  element.ctx.clearRect(0, 0, element.canvas.width, element.canvas.height);
  element.ctx.fillStyle = 'gray';
  element.ctx.font = '20px Port';

  // Obtener el texto actual
  const texto = element.texts[element.currentIndex];

  // Definir el ancho máximo del texto
  const maxWidth = element.canvas.width - 40; // 40 es el espacio de los márgenes

  // Dividir el texto en líneas para que quepa dentro del canvas
  let lines = [];
  let line = '';
  const words = texto.split(' ');
  for (let word of words) {
    const width = element.ctx.measureText(line + word).width;
    if (width < maxWidth) {
      line += (line === '' ? '' : ' ') + word;
    } else {
      lines.push(line);
      line = word;
    }
  }
  lines.push(line);

  // Dibujar el texto en cada línea
  const lineHeight = 24; // Espaciado entre líneas
  const y = (element.canvas.height - lines.length * lineHeight) / 2;
  for (let i = 0; i < lines.length; i++) {
    element.ctx.fillText(lines[i], 20, y + i * lineHeight);
  }

  setTimeout(() => {
    element.currentIndex = (element.currentIndex + 1) % element.texts.length;
    changeText(element);
  }, 5000);
}
//----------------------------SVG--------------------------------//
document.addEventListener('DOMContentLoaded', function () {

  var svg = document.querySelector('#bielas');
  var bbox = svg.getBBox();
  var centerX = bbox.x + bbox.width / 2;
  var centerY = bbox.y + bbox.height / 2;

  var svg = document.querySelector('#textoLogo');
  var bbox = svg.getBBox();
  var centerX2 = bbox.x + bbox.width / 2;
  var centerY2 = bbox.y + bbox.height / 2;

  console.log('Centro del SVG:', centerX, centerY);
  console.log('Centro del SVG:', centerX2, centerY2);

  var animacionBielas = anime({
    targets: '#bielas',
    rotate: '1turn',
    duration: 5000,
    transformOrigin: '133.95273780822754 74.04529190063477',
    complete: function (anim) {
      animacionTexto.restart();
    }
  });

  var animacionTexto = anime({
    targets: '#textoLogo',
    rotate: '1turn',
    duration: 5000,
    transformOrigin: '116.63431167602539 133.08849620819092',
    complete: function (anim) {
      animacionBielas.restart();
    }
  })
});