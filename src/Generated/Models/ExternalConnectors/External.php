<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\AuthorizationSystem;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataRoot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class External implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new External and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return External
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): External {
        return new External();
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
     * Gets the authorizationSystems property value. Represents an onboarded Amazon Web Services (AWS) account, Azure subscription, or Google Cloud Platform (GCP) project that Microsoft Entra Permissions Management collects and analyzes permissions and actions on.
     * @return array<AuthorizationSystem>|null
    */
    public function getAuthorizationSystems(): ?array {
        $val = $this->getBackingStore()->get('authorizationSystems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorizationSystem::class);
            /** @var array<AuthorizationSystem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystems'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connections property value. The connections property
     * @return array<ExternalConnection>|null
    */
    public function getConnections(): ?array {
        $val = $this->getBackingStore()->get('connections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalConnection::class);
            /** @var array<ExternalConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connections'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizationSystems' => fn(ParseNode $n) => $o->setAuthorizationSystems($n->getCollectionOfObjectValues([AuthorizationSystem::class, 'createFromDiscriminatorValue'])),
            'connections' => fn(ParseNode $n) => $o->setConnections($n->getCollectionOfObjectValues([ExternalConnection::class, 'createFromDiscriminatorValue'])),
            'industryData' => fn(ParseNode $n) => $o->setIndustryData($n->getObjectValue([IndustryDataRoot::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the industryData property value. The industryData property
     * @return IndustryDataRoot|null
    */
    public function getIndustryData(): ?IndustryDataRoot {
        $val = $this->getBackingStore()->get('industryData');
        if (is_null($val) || $val instanceof IndustryDataRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'industryData'");
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
        $writer->writeCollectionOfObjectValues('authorizationSystems', $this->getAuthorizationSystems());
        $writer->writeCollectionOfObjectValues('connections', $this->getConnections());
        $writer->writeObjectValue('industryData', $this->getIndustryData());
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
     * Sets the authorizationSystems property value. Represents an onboarded Amazon Web Services (AWS) account, Azure subscription, or Google Cloud Platform (GCP) project that Microsoft Entra Permissions Management collects and analyzes permissions and actions on.
     * @param array<AuthorizationSystem>|null $value Value to set for the authorizationSystems property.
    */
    public function setAuthorizationSystems(?array $value): void {
        $this->getBackingStore()->set('authorizationSystems', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connections property value. The connections property
     * @param array<ExternalConnection>|null $value Value to set for the connections property.
    */
    public function setConnections(?array $value): void {
        $this->getBackingStore()->set('connections', $value);
    }

    /**
     * Sets the industryData property value. The industryData property
     * @param IndustryDataRoot|null $value Value to set for the industryData property.
    */
    public function setIndustryData(?IndustryDataRoot $value): void {
        $this->getBackingStore()->set('industryData', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
