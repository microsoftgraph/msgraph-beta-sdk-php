<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class KeyCredentialConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new KeyCredentialConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyCredentialConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyCredentialConfiguration {
        return new KeyCredentialConfiguration();
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
     * Gets the certificateBasedApplicationConfigurationIds property value. Collection of GUIDs that represent certificateBasedApplicationConfiguration that is allowed as root and intermediate certificate authorities.
     * @return array<string>|null
    */
    public function getCertificateBasedApplicationConfigurationIds(): ?array {
        $val = $this->getBackingStore()->get('certificateBasedApplicationConfigurationIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateBasedApplicationConfigurationIds'");
    }

    /**
     * Gets the excludeActors property value. Collection of custom security attribute exemptions. If an actor user or service principal has the custom security attribute defined in this section, they're exempted from the restriction.  This means that calls the user or service principal makes to create or update apps are exempt from this policy enforcement.
     * @return AppManagementPolicyActorExemptions|null
    */
    public function getExcludeActors(): ?AppManagementPolicyActorExemptions {
        $val = $this->getBackingStore()->get('excludeActors');
        if (is_null($val) || $val instanceof AppManagementPolicyActorExemptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeActors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificateBasedApplicationConfigurationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCertificateBasedApplicationConfigurationIds($val);
            },
            'excludeActors' => fn(ParseNode $n) => $o->setExcludeActors($n->getObjectValue([AppManagementPolicyActorExemptions::class, 'createFromDiscriminatorValue'])),
            'maxLifetime' => fn(ParseNode $n) => $o->setMaxLifetime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictForAppsCreatedAfterDateTime' => fn(ParseNode $n) => $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()),
            'restrictionType' => fn(ParseNode $n) => $o->setRestrictionType($n->getEnumValue(AppKeyCredentialRestrictionType::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AppManagementRestrictionState::class)),
        ];
    }

    /**
     * Gets the maxLifetime property value. String value that indicates the maximum lifetime for key expiration, defined as an ISO 8601 duration. For example, P4DT12H30M5S represents four days, 12 hours, 30 minutes, and five seconds. This property is required when restrictionType is set to keyLifetime.
     * @return DateInterval|null
    */
    public function getMaxLifetime(): ?DateInterval {
        $val = $this->getBackingStore()->get('maxLifetime');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxLifetime'");
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
     * Gets the restrictForAppsCreatedAfterDateTime property value. Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restrictForAppsCreatedAfterDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictForAppsCreatedAfterDateTime'");
    }

    /**
     * Gets the restrictionType property value. The restrictionType property
     * @return AppKeyCredentialRestrictionType|null
    */
    public function getRestrictionType(): ?AppKeyCredentialRestrictionType {
        $val = $this->getBackingStore()->get('restrictionType');
        if (is_null($val) || $val instanceof AppKeyCredentialRestrictionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionType'");
    }

    /**
     * Gets the state property value. Indicates whether the restriction is evaluated. The possible values are: enabled, disabled, unknownFutureValue. If enabled, the restriction is evaluated. If disabled, the restriction isn't evaluated or enforced.
     * @return AppManagementRestrictionState|null
    */
    public function getState(): ?AppManagementRestrictionState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AppManagementRestrictionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('certificateBasedApplicationConfigurationIds', $this->getCertificateBasedApplicationConfigurationIds());
        $writer->writeObjectValue('excludeActors', $this->getExcludeActors());
        $writer->writeDateIntervalValue('maxLifetime', $this->getMaxLifetime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restrictForAppsCreatedAfterDateTime', $this->getRestrictForAppsCreatedAfterDateTime());
        $writer->writeEnumValue('restrictionType', $this->getRestrictionType());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the certificateBasedApplicationConfigurationIds property value. Collection of GUIDs that represent certificateBasedApplicationConfiguration that is allowed as root and intermediate certificate authorities.
     * @param array<string>|null $value Value to set for the certificateBasedApplicationConfigurationIds property.
    */
    public function setCertificateBasedApplicationConfigurationIds(?array $value): void {
        $this->getBackingStore()->set('certificateBasedApplicationConfigurationIds', $value);
    }

    /**
     * Sets the excludeActors property value. Collection of custom security attribute exemptions. If an actor user or service principal has the custom security attribute defined in this section, they're exempted from the restriction.  This means that calls the user or service principal makes to create or update apps are exempt from this policy enforcement.
     * @param AppManagementPolicyActorExemptions|null $value Value to set for the excludeActors property.
    */
    public function setExcludeActors(?AppManagementPolicyActorExemptions $value): void {
        $this->getBackingStore()->set('excludeActors', $value);
    }

    /**
     * Sets the maxLifetime property value. String value that indicates the maximum lifetime for key expiration, defined as an ISO 8601 duration. For example, P4DT12H30M5S represents four days, 12 hours, 30 minutes, and five seconds. This property is required when restrictionType is set to keyLifetime.
     * @param DateInterval|null $value Value to set for the maxLifetime property.
    */
    public function setMaxLifetime(?DateInterval $value): void {
        $this->getBackingStore()->set('maxLifetime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restrictForAppsCreatedAfterDateTime property value. Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied.
     * @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restrictForAppsCreatedAfterDateTime', $value);
    }

    /**
     * Sets the restrictionType property value. The restrictionType property
     * @param AppKeyCredentialRestrictionType|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?AppKeyCredentialRestrictionType $value): void {
        $this->getBackingStore()->set('restrictionType', $value);
    }

    /**
     * Sets the state property value. Indicates whether the restriction is evaluated. The possible values are: enabled, disabled, unknownFutureValue. If enabled, the restriction is evaluated. If disabled, the restriction isn't evaluated or enforced.
     * @param AppManagementRestrictionState|null $value Value to set for the state property.
    */
    public function setState(?AppManagementRestrictionState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
