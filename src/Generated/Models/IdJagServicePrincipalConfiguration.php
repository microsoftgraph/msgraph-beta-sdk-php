<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdJagServicePrincipalConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdJagServicePrincipalConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdJagServicePrincipalConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdJagServicePrincipalConfiguration {
        return new IdJagServicePrincipalConfiguration();
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
     * Gets the enabledClients property value. Required and non-null when ServicePrincipal ID-JAG configuration is supplied. Maps enabled Entra clients to their Resource Authorization Server client identifiers. This is the only supported ID-JAG child on agentIdentityBlueprintPrincipal and agentIdentity.
     * @return array<IdJagEnabledClient>|null
    */
    public function getEnabledClients(): ?array {
        $val = $this->getBackingStore()->get('enabledClients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdJagEnabledClient::class);
            /** @var array<IdJagEnabledClient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabledClients'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabledClients' => fn(ParseNode $n) => $o->setEnabledClients($n->getCollectionOfObjectValues([IdJagEnabledClient::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. Required and non-null when ID-JAG configuration is supplied on a base ServicePrincipal. Indicates whether ID-JAG issuance is enabled for this tenant-local resource. Not supported on agentIdentityBlueprintPrincipal or agentIdentity; returned as null and rejected on write.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
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
        $writer->writeCollectionOfObjectValues('enabledClients', $this->getEnabledClients());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
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
     * Sets the enabledClients property value. Required and non-null when ServicePrincipal ID-JAG configuration is supplied. Maps enabled Entra clients to their Resource Authorization Server client identifiers. This is the only supported ID-JAG child on agentIdentityBlueprintPrincipal and agentIdentity.
     * @param array<IdJagEnabledClient>|null $value Value to set for the enabledClients property.
    */
    public function setEnabledClients(?array $value): void {
        $this->getBackingStore()->set('enabledClients', $value);
    }

    /**
     * Sets the isEnabled property value. Required and non-null when ID-JAG configuration is supplied on a base ServicePrincipal. Indicates whether ID-JAG issuance is enabled for this tenant-local resource. Not supported on agentIdentityBlueprintPrincipal or agentIdentity; returned as null and rejected on write.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
