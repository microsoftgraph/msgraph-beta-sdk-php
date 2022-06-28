<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CartToClassAssociation extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $classroomIds Identifiers of classrooms to be associated with device carts.
    */
    private ?array $classroomIds = null;
    
    /**
     * @var DateTime|null $createdDateTime DateTime the object was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Admin provided description of the CartToClassAssociation.
    */
    private ?string $description = null;
    
    /**
     * @var array<string>|null $deviceCartIds Identifiers of device carts to be associated with classes.
    */
    private ?array $deviceCartIds = null;
    
    /**
     * @var string|null $displayName Admin provided name of the device configuration.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime DateTime the object was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $version Version of the CartToClassAssociation.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new cartToClassAssociation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CartToClassAssociation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CartToClassAssociation {
        return new CartToClassAssociation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classroomIds property value. Identifiers of classrooms to be associated with device carts.
     * @return array<string>|null
    */
    public function getClassroomIds(): ?array {
        return $this->classroomIds;
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Admin provided description of the CartToClassAssociation.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceCartIds property value. Identifiers of device carts to be associated with classes.
     * @return array<string>|null
    */
    public function getDeviceCartIds(): ?array {
        return $this->deviceCartIds;
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classroomIds' => function (ParseNode $n) use ($o) { $o->setClassroomIds($n->getCollectionOfPrimitiveValues()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceCartIds' => function (ParseNode $n) use ($o) { $o->setDeviceCartIds($n->getCollectionOfPrimitiveValues()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the version property value. Version of the CartToClassAssociation.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('classroomIds', $this->classroomIds);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfPrimitiveValues('deviceCartIds', $this->deviceCartIds);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('version', $this->version);
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
     * Sets the classroomIds property value. Identifiers of classrooms to be associated with device carts.
     *  @param array<string>|null $value Value to set for the classroomIds property.
    */
    public function setClassroomIds(?array $value ): void {
        $this->classroomIds = $value;
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Admin provided description of the CartToClassAssociation.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceCartIds property value. Identifiers of device carts to be associated with classes.
     *  @param array<string>|null $value Value to set for the deviceCartIds property.
    */
    public function setDeviceCartIds(?array $value ): void {
        $this->deviceCartIds = $value;
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the version property value. Version of the CartToClassAssociation.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
