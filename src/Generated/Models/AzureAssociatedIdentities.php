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

class AzureAssociatedIdentities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AzureAssociatedIdentities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAssociatedIdentities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAssociatedIdentities {
        return new AzureAssociatedIdentities();
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
     * Gets the all property value. The all property
     * @return array<AzureIdentity>|null
    */
    public function getAll(): ?array {
        $val = $this->getBackingStore()->get('all');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureIdentity::class);
            /** @var array<AzureIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'all'");
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
            'all' => fn(ParseNode $n) => $o->setAll($n->getCollectionOfObjectValues([AzureIdentity::class, 'createFromDiscriminatorValue'])),
            'managedIdentities' => fn(ParseNode $n) => $o->setManagedIdentities($n->getCollectionOfObjectValues([AzureManagedIdentity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'servicePrincipals' => fn(ParseNode $n) => $o->setServicePrincipals($n->getCollectionOfObjectValues([AzureServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([AzureUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the managedIdentities property value. The managedIdentities property
     * @return array<AzureManagedIdentity>|null
    */
    public function getManagedIdentities(): ?array {
        $val = $this->getBackingStore()->get('managedIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureManagedIdentity::class);
            /** @var array<AzureManagedIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedIdentities'");
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
     * Gets the servicePrincipals property value. The servicePrincipals property
     * @return array<AzureServicePrincipal>|null
    */
    public function getServicePrincipals(): ?array {
        $val = $this->getBackingStore()->get('servicePrincipals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureServicePrincipal::class);
            /** @var array<AzureServicePrincipal>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipals'");
    }

    /**
     * Gets the users property value. The users property
     * @return array<AzureUser>|null
    */
    public function getUsers(): ?array {
        $val = $this->getBackingStore()->get('users');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureUser::class);
            /** @var array<AzureUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('all', $this->getAll());
        $writer->writeCollectionOfObjectValues('managedIdentities', $this->getManagedIdentities());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('servicePrincipals', $this->getServicePrincipals());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
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
     * Sets the all property value. The all property
     * @param array<AzureIdentity>|null $value Value to set for the all property.
    */
    public function setAll(?array $value): void {
        $this->getBackingStore()->set('all', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the managedIdentities property value. The managedIdentities property
     * @param array<AzureManagedIdentity>|null $value Value to set for the managedIdentities property.
    */
    public function setManagedIdentities(?array $value): void {
        $this->getBackingStore()->set('managedIdentities', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the servicePrincipals property value. The servicePrincipals property
     * @param array<AzureServicePrincipal>|null $value Value to set for the servicePrincipals property.
    */
    public function setServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('servicePrincipals', $value);
    }

    /**
     * Sets the users property value. The users property
     * @param array<AzureUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
