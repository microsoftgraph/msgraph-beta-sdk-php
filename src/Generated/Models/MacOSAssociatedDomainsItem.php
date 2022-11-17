<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MacOSAssociatedDomainsItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new macOSAssociatedDomainsItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOSAssociatedDomainsItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSAssociatedDomainsItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSAssociatedDomainsItem {
        return new MacOSAssociatedDomainsItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applicationIdentifier property value. The application identifier of the app to associate domains with.
     * @return string|null
    */
    public function getApplicationIdentifier(): ?string {
        return $this->getBackingStore()->get('applicationIdentifier');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the directDownloadsEnabled property value. Determines whether data should be downloaded directly or via a CDN.
     * @return bool|null
    */
    public function getDirectDownloadsEnabled(): ?bool {
        return $this->getBackingStore()->get('directDownloadsEnabled');
    }

    /**
     * Gets the domains property value. The list of domains to associate.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        return $this->getBackingStore()->get('domains');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationIdentifier' => fn(ParseNode $n) => $o->setApplicationIdentifier($n->getStringValue()),
            'directDownloadsEnabled' => fn(ParseNode $n) => $o->setDirectDownloadsEnabled($n->getBooleanValue()),
            'domains' => fn(ParseNode $n) => $o->setDomains($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationIdentifier', $this->getApplicationIdentifier());
        $writer->writeBooleanValue('directDownloadsEnabled', $this->getDirectDownloadsEnabled());
        $writer->writeCollectionOfPrimitiveValues('domains', $this->getDomains());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationIdentifier property value. The application identifier of the app to associate domains with.
     *  @param string|null $value Value to set for the applicationIdentifier property.
    */
    public function setApplicationIdentifier(?string $value): void {
        $this->getBackingStore()->set('applicationIdentifier', $value);
    }

    /**
     * Sets the directDownloadsEnabled property value. Determines whether data should be downloaded directly or via a CDN.
     *  @param bool|null $value Value to set for the directDownloadsEnabled property.
    */
    public function setDirectDownloadsEnabled(?bool $value): void {
        $this->getBackingStore()->set('directDownloadsEnabled', $value);
    }

    /**
     * Sets the domains property value. The list of domains to associate.
     *  @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
