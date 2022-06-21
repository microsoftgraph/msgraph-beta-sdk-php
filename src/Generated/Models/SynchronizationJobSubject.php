<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJobSubject implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SynchronizationLinkedObjects|null $links The links property
    */
    private ?SynchronizationLinkedObjects $links = null;
    
    /**
     * @var string|null $objectId The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Azure AD to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Azure AD.
    */
    private ?string $objectId = null;
    
    /**
     * @var string|null $objectTypeName The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronization from Active Directory to Azure AD.User for synchronization from Azure AD to a third-party application. Worker for synchronization from Workday to either Active Directory or Azure AD.
    */
    private ?string $objectTypeName = null;
    
    /**
     * Instantiates a new synchronizationJobSubject and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJobSubject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJobSubject {
        return new SynchronizationJobSubject();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'links' => function (ParseNode $n) use ($o) { $o->setLinks($n->getObjectValue(array(SynchronizationLinkedObjects::class, 'createFromDiscriminatorValue'))); },
            'objectId' => function (ParseNode $n) use ($o) { $o->setObjectId($n->getStringValue()); },
            'objectTypeName' => function (ParseNode $n) use ($o) { $o->setObjectTypeName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the links property value. The links property
     * @return SynchronizationLinkedObjects|null
    */
    public function getLinks(): ?SynchronizationLinkedObjects {
        return $this->links;
    }

    /**
     * Gets the objectId property value. The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Azure AD to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Azure AD.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
    }

    /**
     * Gets the objectTypeName property value. The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronization from Active Directory to Azure AD.User for synchronization from Azure AD to a third-party application. Worker for synchronization from Workday to either Active Directory or Azure AD.
     * @return string|null
    */
    public function getObjectTypeName(): ?string {
        return $this->objectTypeName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('links', $this->links);
        $writer->writeStringValue('objectId', $this->objectId);
        $writer->writeStringValue('objectTypeName', $this->objectTypeName);
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
     * Sets the links property value. The links property
     *  @param SynchronizationLinkedObjects|null $value Value to set for the links property.
    */
    public function setLinks(?SynchronizationLinkedObjects $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the objectId property value. The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Azure AD to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Azure AD.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the objectTypeName property value. The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronization from Active Directory to Azure AD.User for synchronization from Azure AD to a third-party application. Worker for synchronization from Workday to either Active Directory or Azure AD.
     *  @param string|null $value Value to set for the objectTypeName property.
    */
    public function setObjectTypeName(?string $value ): void {
        $this->objectTypeName = $value;
    }

}
