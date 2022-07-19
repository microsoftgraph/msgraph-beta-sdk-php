<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosBookmark implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $bookmarkFolder The folder into which the bookmark should be added in Safari
    */
    private ?string $bookmarkFolder = null;
    
    /**
     * @var string|null $displayName The display name of the bookmark
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $url URL allowed to access
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new iosBookmark and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosBookmark');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosBookmark
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosBookmark {
        return new IosBookmark();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bookmarkFolder property value. The folder into which the bookmark should be added in Safari
     * @return string|null
    */
    public function getBookmarkFolder(): ?string {
        return $this->bookmarkFolder;
    }

    /**
     * Gets the displayName property value. The display name of the bookmark
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bookmarkFolder' => function (ParseNode $n) use ($o) { $o->setBookmarkFolder($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the url property value. URL allowed to access
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('bookmarkFolder', $this->bookmarkFolder);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('url', $this->url);
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
     * Sets the bookmarkFolder property value. The folder into which the bookmark should be added in Safari
     *  @param string|null $value Value to set for the bookmarkFolder property.
    */
    public function setBookmarkFolder(?string $value ): void {
        $this->bookmarkFolder = $value;
    }

    /**
     * Sets the displayName property value. The display name of the bookmark
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the url property value. URL allowed to access
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}
