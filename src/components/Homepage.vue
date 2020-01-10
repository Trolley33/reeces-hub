<template>
  <div class="ma-3">
    <vue-timeline-update
    :date="new Date('2020/01/10')"
    title="Rebirth!"
    description="Now starting to work on my portfolio again, isn't that exciting?"
    thumbnail="https://i.ytimg.com/vi/i1DOTURfpno/maxresdefault.jpg"
    category="ANNOUNCEMENT"
    icon="build"
    color="purple"
    />

    <vue-timeline-update
    :date="new Date('2019/10/30')"
    title="The beginning"
    description="Bought my own domain and hosting platform, fame here I come!"
    category="WOW!"
    icon="code"
    color="white"
    is-last
    />
  </div>
</template>