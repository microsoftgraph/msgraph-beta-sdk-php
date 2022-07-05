<?php

namespace Microsoft\Graph\Beta\Generated\Drive\Root\Preview;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PreviewPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowEdit The allowEdit property
    */
    private ?bool $allowEdit = null;
    
    /**
     * @var bool|null $chromeless The chromeless property
    */
    private ?bool $chromeless = null;
    
    /**
     * @var string|null $page The page property
    */
    private ?string $page = null;
    
    /**
     * @var string|null $viewer The viewer property
    */
    private ?string $viewer = null;
    
    /**
     * @var float|null $zoom The zoom property
    */
    private ?float $zoom = null;
    
    /**
     * Instantiates a new previewPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreviewPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreviewPostRequestBody {
        return new PreviewPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowEdit property value. The allowEdit property
     * @return bool|null
    */
    public function getAllowEdit(): ?bool {
        return $this->allowEdit;
    }

    /**
     * Gets the chromeless property value. The chromeless property
     * @return bool|null
    */
    public function getChromeless(): ?bool {
        return $this->chromeless;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowEdit' => function (ParseNode $n) use ($o) { $o->setAllowEdit($n->getBooleanValue()); },
            'chromeless' => function (ParseNode $n) use ($o) { $o->setChromeless($n->getBooleanValue()); },
            'page' => function (ParseNode $n) use ($o) { $o->setPage($n->getStringValue()); },
            'viewer' => function (ParseNode $n) use ($o) { $o->setViewer($n->getStringValue()); },
            'zoom' => function (ParseNode $n) use ($o) { $o->setZoom($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->page;
    }

    /**
     * Gets the viewer property value. The viewer property
     * @return string|null
    */
    public function getViewer(): ?string {
        return $this->viewer;
    }

    /**
     * Gets the zoom property value. The zoom property
     * @return float|null
    */
    public function getZoom(): ?float {
        return $this->zoom;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowEdit', $this->allowEdit);
        $writer->writeBooleanValue('chromeless', $this->chromeless);
        $writer->writeStringValue('page', $this->page);
        $writer->writeStringValue('viewer', $this->viewer);
        $writer->writeFloatValue('zoom', $this->zoom);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowEdit property value. The allowEdit property
     *  @param bool|null $value Value to set for the allowEdit property.
    */
    public function setAllowEdit(?bool $value ): void {
        $this->allowEdit = $value;
    }

    /**
     * Sets the chromeless property value. The chromeless property
     *  @param bool|null $value Value to set for the chromeless property.
    */
    public function setChromeless(?bool $value ): void {
        $this->chromeless = $value;
    }

    /**
     * Sets the page property value. The page property
     *  @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value ): void {
        $this->page = $value;
    }

    /**
     * Sets the viewer property value. The viewer property
     *  @param string|null $value Value to set for the viewer property.
    */
    public function setViewer(?string $value ): void {
        $this->viewer = $value;
    }

    /**
     * Sets the zoom property value. The zoom property
     *  @param float|null $value Value to set for the zoom property.
    */
    public function setZoom(?float $value ): void {
        $this->zoom = $value;
    }

}
