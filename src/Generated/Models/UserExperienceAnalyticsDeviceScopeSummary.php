<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserExperienceAnalyticsDeviceScopeSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userExperienceAnalyticsDeviceScopeSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceScopeSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceScopeSummary {
        return new UserExperienceAnalyticsDeviceScopeSummary();
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
     * Gets the completedDeviceScopeIds property value. A collection of the user experience analytics device scope Unique Identifiers that are enabled and finished recalculating the report metric.
     * @return array<string>|null
    */
    public function getCompletedDeviceScopeIds(): ?array {
        return $this->getBackingStore()->get('completedDeviceScopeIds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedDeviceScopeIds' => fn(ParseNode $n) => $o->setCompletedDeviceScopeIds($n->getCollectionOfPrimitiveValues()),
            'insufficientDataDeviceScopeIds' => fn(ParseNode $n) => $o->setInsufficientDataDeviceScopeIds($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalDeviceScopes' => fn(ParseNode $n) => $o->setTotalDeviceScopes($n->getIntegerValue()),
            'totalDeviceScopesEnabled' => fn(ParseNode $n) => $o->setTotalDeviceScopesEnabled($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the insufficientDataDeviceScopeIds property value. A collection of user experience analytics device scope Unique Identitfiers that are enabled but there is insufficient data to calculate results.
     * @return array<string>|null
    */
    public function getInsufficientDataDeviceScopeIds(): ?array {
        return $this->getBackingStore()->get('insufficientDataDeviceScopeIds');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the totalDeviceScopes property value. The total number of user experience analytics device scopes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDeviceScopes(): ?int {
        return $this->getBackingStore()->get('totalDeviceScopes');
    }

    /**
     * Gets the totalDeviceScopesEnabled property value. The total number of user experience analytics device scopes that are enabled. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDeviceScopesEnabled(): ?int {
        return $this->getBackingStore()->get('totalDeviceScopesEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('completedDeviceScopeIds', $this->getCompletedDeviceScopeIds());
        $writer->writeCollectionOfPrimitiveValues('insufficientDataDeviceScopeIds', $this->getInsufficientDataDeviceScopeIds());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalDeviceScopes', $this->getTotalDeviceScopes());
        $writer->writeIntegerValue('totalDeviceScopesEnabled', $this->getTotalDeviceScopesEnabled());
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
     * Sets the completedDeviceScopeIds property value. A collection of the user experience analytics device scope Unique Identifiers that are enabled and finished recalculating the report metric.
     *  @param array<string>|null $value Value to set for the completedDeviceScopeIds property.
    */
    public function setCompletedDeviceScopeIds(?array $value): void {
        $this->getBackingStore()->set('completedDeviceScopeIds', $value);
    }

    /**
     * Sets the insufficientDataDeviceScopeIds property value. A collection of user experience analytics device scope Unique Identitfiers that are enabled but there is insufficient data to calculate results.
     *  @param array<string>|null $value Value to set for the insufficientDataDeviceScopeIds property.
    */
    public function setInsufficientDataDeviceScopeIds(?array $value): void {
        $this->getBackingStore()->set('insufficientDataDeviceScopeIds', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalDeviceScopes property value. The total number of user experience analytics device scopes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the totalDeviceScopes property.
    */
    public function setTotalDeviceScopes(?int $value): void {
        $this->getBackingStore()->set('totalDeviceScopes', $value);
    }

    /**
     * Sets the totalDeviceScopesEnabled property value. The total number of user experience analytics device scopes that are enabled. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the totalDeviceScopesEnabled property.
    */
    public function setTotalDeviceScopesEnabled(?int $value): void {
        $this->getBackingStore()->set('totalDeviceScopesEnabled', $value);
    }

}
