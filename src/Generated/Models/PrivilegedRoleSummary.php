<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleSummary extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $elevatedCount The number of users that have the role assigned and the role is activated.
    */
    private ?int $elevatedCount = null;
    
    /**
     * @var int|null $managedCount The number of users that have the role assigned but the role is deactivated.
    */
    private ?int $managedCount = null;
    
    /**
     * @var bool|null $mfaEnabled true if the role activation requires MFA. false if the role activation doesn't require MFA.
    */
    private ?bool $mfaEnabled = null;
    
    /**
     * @var RoleSummaryStatus|null $status Possible values are: ok, bad. The value depends on the ratio of (managedCount / usersCount). If the ratio is less than a predefined threshold, ok is returned. Otherwise, bad is returned.
    */
    private ?RoleSummaryStatus $status = null;
    
    /**
     * @var int|null $usersCount The number of users that are assigned with the role.
    */
    private ?int $usersCount = null;
    
    /**
     * Instantiates a new PrivilegedRoleSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRoleSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRoleSummary {
        return new PrivilegedRoleSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the elevatedCount property value. The number of users that have the role assigned and the role is activated.
     * @return int|null
    */
    public function getElevatedCount(): ?int {
        return $this->elevatedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'elevatedCount' => function (ParseNode $n) use ($o) { $o->setElevatedCount($n->getIntegerValue()); },
            'managedCount' => function (ParseNode $n) use ($o) { $o->setManagedCount($n->getIntegerValue()); },
            'mfaEnabled' => function (ParseNode $n) use ($o) { $o->setMfaEnabled($n->getBooleanValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(RoleSummaryStatus::class)); },
            'usersCount' => function (ParseNode $n) use ($o) { $o->setUsersCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the managedCount property value. The number of users that have the role assigned but the role is deactivated.
     * @return int|null
    */
    public function getManagedCount(): ?int {
        return $this->managedCount;
    }

    /**
     * Gets the mfaEnabled property value. true if the role activation requires MFA. false if the role activation doesn't require MFA.
     * @return bool|null
    */
    public function getMfaEnabled(): ?bool {
        return $this->mfaEnabled;
    }

    /**
     * Gets the status property value. Possible values are: ok, bad. The value depends on the ratio of (managedCount / usersCount). If the ratio is less than a predefined threshold, ok is returned. Otherwise, bad is returned.
     * @return RoleSummaryStatus|null
    */
    public function getStatus(): ?RoleSummaryStatus {
        return $this->status;
    }

    /**
     * Gets the usersCount property value. The number of users that are assigned with the role.
     * @return int|null
    */
    public function getUsersCount(): ?int {
        return $this->usersCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('elevatedCount', $this->elevatedCount);
        $writer->writeIntegerValue('managedCount', $this->managedCount);
        $writer->writeBooleanValue('mfaEnabled', $this->mfaEnabled);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeIntegerValue('usersCount', $this->usersCount);
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
     * Sets the elevatedCount property value. The number of users that have the role assigned and the role is activated.
     *  @param int|null $value Value to set for the elevatedCount property.
    */
    public function setElevatedCount(?int $value ): void {
        $this->elevatedCount = $value;
    }

    /**
     * Sets the managedCount property value. The number of users that have the role assigned but the role is deactivated.
     *  @param int|null $value Value to set for the managedCount property.
    */
    public function setManagedCount(?int $value ): void {
        $this->managedCount = $value;
    }

    /**
     * Sets the mfaEnabled property value. true if the role activation requires MFA. false if the role activation doesn't require MFA.
     *  @param bool|null $value Value to set for the mfaEnabled property.
    */
    public function setMfaEnabled(?bool $value ): void {
        $this->mfaEnabled = $value;
    }

    /**
     * Sets the status property value. Possible values are: ok, bad. The value depends on the ratio of (managedCount / usersCount). If the ratio is less than a predefined threshold, ok is returned. Otherwise, bad is returned.
     *  @param RoleSummaryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RoleSummaryStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the usersCount property value. The number of users that are assigned with the role.
     *  @param int|null $value Value to set for the usersCount property.
    */
    public function setUsersCount(?int $value ): void {
        $this->usersCount = $value;
    }

}
