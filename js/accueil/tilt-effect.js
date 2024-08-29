if (document.querySelector(".qui-suis-je-banner")) {
    const tiltedSection = document.querySelector(".qui-suis-je-banner")
    const tiltedCard = document.querySelector(".skills-container")

    if (window.matchMedia("(pointer:fine)").matches) {

        tiltedSection.addEventListener("mousemove", handleTiltEffect)

        function handleTiltEffect(e) {
            const tiltedSectionDimensions = tiltedSection.getBoundingClientRect()

            const mouseXInSection = e.clientX - tiltedSectionDimensions.left,
                mouseYInSection = e.clientY - tiltedSectionDimensions.top

            const elementMiddleX = tiltedSectionDimensions.width / 2,
                elementMiddleY = tiltedSectionDimensions.height / 2;

            const maxTiltX = 15,
                maxTiltY = 15;


            const tiltAngleY = ((mouseXInSection - elementMiddleX) / elementMiddleX) * maxTiltX
            const tiltAngleX = ((mouseYInSection - elementMiddleY) / elementMiddleY) * maxTiltY

            //tiltedCard.style.transform = `rotateY(${tiltAngleY}deg) rotateX(${-tiltAngleX}deg)`
            //shadow
            const maxShadowMove = 50
            const shadowMoveX = (tiltAngleY / maxTiltX) * maxShadowMove
            const shadowMoveY = (tiltAngleX / maxTiltY) * maxShadowMove

            tiltedCard.style.boxShadow = `${shadowMoveX}px ${shadowMoveY}px 50px rgba(255, 255, 255, 0.2)`
        }


        tiltedSection.addEventListener("mouseout", resetTiltOnMouseOut)

        function resetTiltOnMouseOut() {
            tiltedCard.style.transform = `rotateY(${0}deg) rotateX(${0}deg)`
            tiltedCard.style.boxShadow = `0px 0px 50px rgba(0, 0, 0, 0.2)`
        }
    }
}