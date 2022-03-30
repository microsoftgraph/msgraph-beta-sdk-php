<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppIcon extends Entity 
{
    /** @var TeamworkHostedContent|null $hostedContent The contents of the app icon if the icon is hosted within the Teams infrastructure. */
    private ?TeamworkHostedContent $hostedContent = null;
    
    /** @var string|null $webUrl The web URL that can be used for downloading the image. */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new teamsAppIcon and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppIcon
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppIcon {
        return new TeamsAppIcon();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'hostedContent' => function (self $o, ParseNode $n) { $o->setHostedContent($n->getObjectValue(TeamworkHostedContent::class)); },
            'webUrl' => function (self $o, ParseNode $n) { $o->setWebUrl($n->getStringValue()); },
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
