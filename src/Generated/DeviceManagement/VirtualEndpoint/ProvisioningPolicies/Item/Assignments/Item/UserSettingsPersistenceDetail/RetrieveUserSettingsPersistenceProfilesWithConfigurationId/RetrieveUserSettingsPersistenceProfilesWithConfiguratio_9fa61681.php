<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\UserSettingsPersistenceDetail\RetrieveUserSettingsPersistenceProfilesWithConfigurationId;

use Microsoft\Graph\Beta\Generated\Models\BaseCollectionPaginationCountResponse;
use Microsoft\Graph\Beta\Generated\Models\CloudPCUserSettingsPersistenceProfile;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Original name: retrieveUserSettingsPersistenceProfilesWithConfigurationIdGetResponse
*/
class RetrieveUserSettingsPersistenceProfilesWithConfiguratio_9fa61681 extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * Instantiates a new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_9fa61681 and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetrieveUserSettingsPersistenceProfilesWithConfiguratio_9fa61681
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetrieveUserSettingsPersistenceProfilesWithConfiguratio_9fa61681 {
        return new RetrieveUserSettingsPersistenceProfilesWithConfiguratio_9fa61681();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([CloudPCUserSettingsPersistenceProfile::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<CloudPCUserSettingsPersistenceProfile>|null
    */
    public function getValue(): ?array {
        $val = $this->getBackingStore()->get('value');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPCUserSettingsPersistenceProfile::class);
            /** @var array<CloudPCUserSettingsPersistenceProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the value property value. The value property
     * @param array<CloudPCUserSettingsPersistenceProfile>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
