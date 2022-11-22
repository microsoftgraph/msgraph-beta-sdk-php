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

class KeyCredentialConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new keyCredentialConfiguration and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'maxLifetime' => fn(ParseNode $n) => $o->setMaxLifetime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictForAppsCreatedAfterDateTime' => fn(ParseNode $n) => $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()),
            'restrictionType' => fn(ParseNode $n) => $o->setRestrictionType($n->getEnumValue(AppKeyCredentialRestrictionType::class)),
        ];
    }

    /**
     * Gets the maxLifetime property value. The maxLifetime property
     * @return DateInterval|null
    */
    public function getMaxLifetime(): ?DateInterval {
        return $this->getBackingStore()->get('maxLifetime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the restrictForAppsCreatedAfterDateTime property value. Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        return $this->getBackingStore()->get('restrictForAppsCreatedAfterDateTime');
    }

    /**
     * Gets the restrictionType property value. The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @return AppKeyCredentialRestrictionType|null
    */
    public function getRestrictionType(): ?AppKeyCredentialRestrictionType {
        return $this->getBackingStore()->get('restrictionType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('maxLifetime', $this->getMaxLifetime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restrictForAppsCreatedAfterDateTime', $this->getRestrictForAppsCreatedAfterDateTime());
        $writer->writeEnumValue('restrictionType', $this->getRestrictionType());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the maxLifetime property value. The maxLifetime property
     *  @param DateInterval|null $value Value to set for the maxLifetime property.
    */
    public function setMaxLifetime(?DateInterval $value): void {
        $this->getBackingStore()->set('maxLifetime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restrictForAppsCreatedAfterDateTime property value. Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
     *  @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restrictForAppsCreatedAfterDateTime', $value);
    }

    /**
     * Sets the restrictionType property value. The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     *  @param AppKeyCredentialRestrictionType|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?AppKeyCredentialRestrictionType $value): void {
        $this->getBackingStore()->set('restrictionType', $value);
    }

}
