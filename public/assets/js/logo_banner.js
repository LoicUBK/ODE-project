// Animation du logo barre de nav :

logoAnimation
  .add({
    targets: '#logo2',
    translateY: [-100, 0],
    opacity: [0, 1],
    elasticity: 600,
    duration: 2000,
  })
  .add({
    targets: '#logo-hexagon2',
    rotate: [-90, 0],
    duration: 1200,
    elasticity: 600,
    offset: 100,
  })
  .add({
    targets: '#logo-circle2',
    scale: [0, 1],
    duration: 1200,
    elasticity: 600,
    offset: 500,
  })
  .add({
    targets: '#logo-mask2',
    scale: [0, 1],
    duration: 1000,
    elasticity: 600,
    offset: 550,
  })
  .add({
    targets: '#logo-text2',
    translateX: ['-100%', 0],
    opacity: [0, 1],
    duration: 1000,
    easing: 'easeOutExpo',
    offset: 1000,
  })
