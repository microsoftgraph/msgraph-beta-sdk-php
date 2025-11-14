<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharePointOneDriveOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharePointOneDriveOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointOneDriveOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointOneDriveOptions {
        return new SharePointOneDriveOptions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'includeContent' => fn(ParseNode $n) => $o->setIncludeContent($n->getEnumValue(SearchContent::class)),
            'includeHiddenContent' => fn(ParseNode $n) => $o->setIncludeHiddenContent($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeContent property value. The type of search content. The possible values are: privateContent, sharedContent. Read-only.
     * @return SearchContent|null
    */
    public function getIncludeContent(): ?SearchContent {
        $val = $this->getBackingStore()->get('includeContent');
        if (is_null($val) || $val instanceof SearchContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeContent'");
    }

    /**
     * Gets the includeHiddenContent property value. Indicates whether the search results include content that is normally hidden, such as archived content and SharePoint Embedded (RaaS). The default value is false, which prevents hidden content from being returned. You can also optionally include KQL to scope your query for hidden content to specific content types. For more information, see Search hidden content.
     * @return bool|null
    */
    public function getIncludeHiddenContent(): ?bool {
        $val = $this->getBackingStore()->get('includeHiddenContent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeHiddenContent'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('includeContent', $this->getIncludeContent());
        $writer->writeBooleanValue('includeHiddenContent', $this->getIncludeHiddenContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the includeContent property value. The type of search content. The possible values are: privateContent, sharedContent. Read-only.
     * @param SearchContent|null $value Value to set for the includeContent property.
    */
    public function setIncludeContent(?SearchContent $value): void {
        $this->getBackingStore()->set('includeContent', $value);
    }

    /**
     * Sets the includeHiddenContent property value. Indicates whether the search results include content that is normally hidden, such as archived content and SharePoint Embedded (RaaS). The default value is false, which prevents hidden content from being returned. You can also optionally include KQL to scope your query for hidden content to specific content types. For more information, see Search hidden content.
     * @param bool|null $value Value to set for the includeHiddenContent property.
    */
    public function setIncludeHiddenContent(?bool $value): void {
        $this->getBackingStore()->set('includeHiddenContent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
