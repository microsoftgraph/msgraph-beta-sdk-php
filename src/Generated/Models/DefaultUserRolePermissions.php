<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DefaultUserRolePermissions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowedToCreateApps Indicates whether the default user role can create applications.
    */
    private ?bool $allowedToCreateApps = null;
    
    /**
     * @var bool|null $allowedToCreateSecurityGroups Indicates whether the default user role can create security groups.
    */
    private ?bool $allowedToCreateSecurityGroups = null;
    
    /**
     * @var bool|null $allowedToReadOtherUsers Indicates whether the default user role can read other users.
    */
    private ?bool $allowedToReadOtherUsers = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new defaultUserRolePermissions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.defaultUserRolePermissions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultUserRolePermissions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultUserRolePermissions {
        return new DefaultUserRolePermissions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedToCreateApps property value. Indicates whether the default user role can create applications.
     * @return bool|null
    */
    public function getAllowedToCreateApps(): ?bool {
        return $this->allowedToCreateApps;
    }

    /**
     * Gets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups.
     * @return bool|null
    */
    public function getAllowedToCreateSecurityGroups(): ?bool {
        return $this->allowedToCreateSecurityGroups;
    }

    /**
     * Gets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users.
     * @return bool|null
    */
    public function getAllowedToReadOtherUsers(): ?bool {
        return $this->allowedToReadOtherUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedToCreateApps' => function (ParseNode $n) use ($o) { $o->setAllowedToCreateApps($n->getBooleanValue()); },
            'allowedToCreateSecurityGroups' => function (ParseNode $n) use ($o) { $o->setAllowedToCreateSecurityGroups($n->getBooleanValue()); },
            'allowedToReadOtherUsers' => function (ParseNode $n) use ($o) { $o->setAllowedToReadOtherUsers($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowedToCreateApps', $this->allowedToCreateApps);
        $writer->writeBooleanValue('allowedToCreateSecurityGroups', $this->allowedToCreateSecurityGroups);
        $writer->writeBooleanValue('allowedToReadOtherUsers', $this->allowedToReadOtherUsers);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowedToCreateApps property value. Indicates whether the default user role can create applications.
     *  @param bool|null $value Value to set for the allowedToCreateApps property.
    */
    public function setAllowedToCreateApps(?bool $value ): void {
        $this->allowedToCreateApps = $value;
    }

    /**
     * Sets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups.
     *  @param bool|null $value Value to set for the allowedToCreateSecurityGroups property.
    */
    public function setAllowedToCreateSecurityGroups(?bool $value ): void {
        $this->allowedToCreateSecurityGroups = $value;
    }

    /**
     * Sets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users.
     *  @param bool|null $value Value to set for the allowedToReadOtherUsers property.
    */
    public function setAllowedToReadOtherUsers(?bool $value ): void {
        $this->allowedToReadOtherUsers = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
