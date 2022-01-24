document.addEventListener('DOMContentLoaded', () => {
    const camada1 = document.querySelector('#camada1Odontograma')
    const contexto1 = camada1.getContext('2d')


    let defaultPositions = {
        startYPositionTooth: 180,
        MarginXBetweenTeeth: 8,
        marginYBetweenTeeth: 200
    }



    const resizeCanvas = () => {


        //  exibeMarcacoes()
        displayStructure()
    }


    const displayStructure = () => {
        // document.querySelector("#canva-group").style.display = 'block'

        for (let index = 0; index < 16; index++) {
            constPositionX = definePosicaoXInitialTooth(index)
            drawTooth(PositionX, PositionsDefault.PositionYInitialTooth)
        }

        for (let index = 0; index < 16; index++) {
            constPositionX = definePosicaoXInitialTooth(index)
            drawTooth(PositionX, PositionsDefault.MarginYBetweenTeeth + SizeTooth + PositionsPattern.PositionYInitialTooth)
        }

        numberTooth.upper.forEach((number, index) => {
            constPositionX = definePosicaoXInitialSquare(index)
            drawSquareNumTooth({
                position: {
                    x: positionX,
                    y: (StandardPositions.MarginYBetweenTeeth / 5) + ToothSize + PatternPositions.PositionYInitialTooth
                },
                firstOrLastTooth: index === 0 || index === 15,
                numberTooth: number,
                height: toothsize / 1.8,
                width: index === 0 || index === 15 ? ToothSize + StandardPositions.MarginXBetweenTeeth : ToothSize + 2 * StandardPositions.MarginXBetweenTeeth
            })
        })

        numberTooth.inferior.forEach((number, index) => {
            constPositionX = definePosicaoXInitialSquare(index)
            drawSquareNumTooth({
                position: {
                    x: positionX,
                    y: (StandardPositions.BorderYBetweenTooth / 5) + (ToothSize / 1.8) + ToothSize + StandardPosition.YInitialToothPosition
                },
                firstOrLastTooth: index === 0 || index === 15,
                numberTooth: number,
                height: toothsize / 1.8,
                width: index === 0 || index === 15 ? ToothSize + StandardPositions.MarginXBetweenTeeth : ToothSize + 2 * StandardPositions.MarginXBetweenTeeth
            })
        })
    }

    const startOdontogram = () => {

        resizeCanvas()

    }


    startOdontogram()
})
