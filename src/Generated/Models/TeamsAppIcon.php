<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppIcon extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkHostedContent|null $hostedContent The contents of the app icon if the icon is hosted within the Teams infrastructure.
    */
    private ?TeamworkHostedContent $hostedContent = null;
    
    /**
     * @var string|null $webUrl The web URL that can be used for downloading the image.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new teamsAppIcon and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppIcon
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppIcon {
        return new TeamsAppIcon();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hostedContent' => function (ParseNode $n) use ($o) { $o->setHostedContent($n->getObjectValue(array(TeamworkHostedContent::class, 'createFromDiscriminatorValue'))); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hostedContent property value. The contents of the app icon if the icon is hosted within the Teams infrastructure.
     * @return TeamworkHostedContent|null
    */
    public function getHostedContent(): ?TeamworkHostedContent {
        return $this->hostedContent;
    }

    /**
     * Gets the webUrl property value. The web URL that can be used for downloading the image.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('hostedContent', $this->hostedContent);
        $writer->writeStringValue('webUrl', $this->webUrl);
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
     * Sets the hostedContent property value. The contents of the app icon if the icon is hosted within the Teams infrastructure.
     *  @param TeamworkHostedContent|null $value Value to set for the hostedContent property.
    */
    public function setHostedContent(?TeamworkHostedContent $value ): void {
        $this->hostedContent = $value;
    }

    /**
     * Sets the webUrl property value. The web URL that can be used for downloading the image.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
