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

class AzureAdJoinPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new azureAdJoinPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAdJoinPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAdJoinPolicy {
        return new AzureAdJoinPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the allowedGroups property value. The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @return array<string>|null
    */
    public function getAllowedGroups(): ?array {
        $val = $this->getBackingStore()->get('allowedGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedGroups'");
    }

    /**
     * Gets the allowedUsers property value. The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @return array<string>|null
    */
    public function getAllowedUsers(): ?array {
        $val = $this->getBackingStore()->get('allowedUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedUsers'");
    }

    /**
     * Gets the appliesTo property value. Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
     * @return PolicyScope|null
    */
    public function getAppliesTo(): ?PolicyScope {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_null($val) || $val instanceof PolicyScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'allowedGroups' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedGroups($val);
            },
            'allowedUsers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedUsers($val);
            },
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getEnumValue(PolicyScope::class)),
            'isAdminConfigurable' => fn(ParseNode $n) => $o->setIsAdminConfigurable($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAdminConfigurable property value. Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
     * @return bool|null
    */
    public function getIsAdminConfigurable(): ?bool {
        $val = $this->getBackingStore()->get('isAdminConfigurable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAdminConfigurable'");
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
        $writer->writeCollectionOfPrimitiveValues('allowedGroups', $this->getAllowedGroups());
        $writer->writeCollectionOfPrimitiveValues('allowedUsers', $this->getAllowedUsers());
        $writer->writeEnumValue('appliesTo', $this->getAppliesTo());
        $writer->writeBooleanValue('isAdminConfigurable', $this->getIsAdminConfigurable());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedGroups property value. The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @param array<string>|null $value Value to set for the allowedGroups property.
    */
    public function setAllowedGroups(?array $value): void {
        $this->getBackingStore()->set('allowedGroups', $value);
    }

    /**
     * Sets the allowedUsers property value. The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @param array<string>|null $value Value to set for the allowedUsers property.
    */
    public function setAllowedUsers(?array $value): void {
        $this->getBackingStore()->set('allowedUsers', $value);
    }

    /**
     * Sets the appliesTo property value. Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
     * @param PolicyScope|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?PolicyScope $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isAdminConfigurable property value. Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
     * @param bool|null $value Value to set for the isAdminConfigurable property.
    */
    public function setIsAdminConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isAdminConfigurable', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
