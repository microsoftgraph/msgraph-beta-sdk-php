<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryObject extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $deletedDateTime Date and time when this object was deleted. Always null when the object hasn't been deleted.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * Instantiates a new directoryObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryObject {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.administrativeUnit': return new AdministrativeUnit();
                case '#microsoft.graph.application': return new Application();
                case '#microsoft.graph.contract': return new Contract();
                case '#microsoft.graph.device': return new Device();
                case '#microsoft.graph.directoryObjectPartnerReference': return new DirectoryObjectPartnerReference();
                case '#microsoft.graph.directoryRole': return new DirectoryRole();
                case '#microsoft.graph.directoryRoleTemplate': return new DirectoryRoleTemplate();
                case '#microsoft.graph.directorySettingTemplate': return new DirectorySettingTemplate();
                case '#microsoft.graph.endpoint': return new Endpoint();
                case '#microsoft.graph.extensionProperty': return new ExtensionProperty();
                case '#microsoft.graph.group': return new Group();
                case '#microsoft.graph.organization': return new Organization();
                case '#microsoft.graph.orgContact': return new OrgContact();
                case '#microsoft.graph.policyBase': return new PolicyBase();
                case '#microsoft.graph.resourceSpecificPermissionGrant': return new ResourceSpecificPermissionGrant();
                case '#microsoft.graph.servicePrincipal': return new ServicePrincipal();
                case '#microsoft.graph.user': return new User();
            }
        }
        return new DirectoryObject();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => function (ParseNode $n) use ($o) { $o->setDeletedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

}
