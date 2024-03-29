<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows 10 Enrollment Status Page Configuration
*/
class Windows10EnrollmentCompletionPageConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10EnrollmentCompletionPageConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EnrollmentCompletionPageConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EnrollmentCompletionPageConfiguration {
        return new Windows10EnrollmentCompletionPageConfiguration();
    }

    /**
     * Gets the allowDeviceResetOnInstallFailure property value. When TRUE, allows device reset on installation failure. When false, reset is blocked. The default is false.
     * @return bool|null
    */
    public function getAllowDeviceResetOnInstallFailure(): ?bool {
        $val = $this->getBackingStore()->get('allowDeviceResetOnInstallFailure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeviceResetOnInstallFailure'");
    }

    /**
     * Gets the allowDeviceUseOnInstallFailure property value. When TRUE, allows the user to continue using the device on installation failure. When false, blocks the user on installation failure. The default is false.
     * @return bool|null
    */
    public function getAllowDeviceUseOnInstallFailure(): ?bool {
        $val = $this->getBackingStore()->get('allowDeviceUseOnInstallFailure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeviceUseOnInstallFailure'");
    }

    /**
     * Gets the allowLogCollectionOnInstallFailure property value. When TRUE, allows log collection on installation failure. When false, log collection is not allowed. The default is false.
     * @return bool|null
    */
    public function getAllowLogCollectionOnInstallFailure(): ?bool {
        $val = $this->getBackingStore()->get('allowLogCollectionOnInstallFailure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowLogCollectionOnInstallFailure'");
    }

    /**
     * Gets the allowNonBlockingAppInstallation property value. When TRUE, ESP (Enrollment Status Page) installs all required apps targeted during technician phase and ignores any failures for non-blocking apps. When FALSE, ESP fails on any error during app install. The default is false.
     * @return bool|null
    */
    public function getAllowNonBlockingAppInstallation(): ?bool {
        $val = $this->getBackingStore()->get('allowNonBlockingAppInstallation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowNonBlockingAppInstallation'");
    }

    /**
     * Gets the blockDeviceSetupRetryByUser property value. When TRUE, blocks user from retrying the setup on installation failure. When false, user is allowed to retry. The default is false.
     * @return bool|null
    */
    public function getBlockDeviceSetupRetryByUser(): ?bool {
        $val = $this->getBackingStore()->get('blockDeviceSetupRetryByUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockDeviceSetupRetryByUser'");
    }

    /**
     * Gets the customErrorMessage property value. The custom error message to show upon installation failure. Max length is 10000. example: 'Setup could not be completed. Please try again or contact your support person for help.'
     * @return string|null
    */
    public function getCustomErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('customErrorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customErrorMessage'");
    }

    /**
     * Gets the disableUserStatusTrackingAfterFirstUser property value. When TRUE, disables showing installation progress for first user post enrollment. When false, enables showing progress. The default is false.
     * @return bool|null
    */
    public function getDisableUserStatusTrackingAfterFirstUser(): ?bool {
        $val = $this->getBackingStore()->get('disableUserStatusTrackingAfterFirstUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableUserStatusTrackingAfterFirstUser'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeviceResetOnInstallFailure' => fn(ParseNode $n) => $o->setAllowDeviceResetOnInstallFailure($n->getBooleanValue()),
            'allowDeviceUseOnInstallFailure' => fn(ParseNode $n) => $o->setAllowDeviceUseOnInstallFailure($n->getBooleanValue()),
            'allowLogCollectionOnInstallFailure' => fn(ParseNode $n) => $o->setAllowLogCollectionOnInstallFailure($n->getBooleanValue()),
            'allowNonBlockingAppInstallation' => fn(ParseNode $n) => $o->setAllowNonBlockingAppInstallation($n->getBooleanValue()),
            'blockDeviceSetupRetryByUser' => fn(ParseNode $n) => $o->setBlockDeviceSetupRetryByUser($n->getBooleanValue()),
            'customErrorMessage' => fn(ParseNode $n) => $o->setCustomErrorMessage($n->getStringValue()),
            'disableUserStatusTrackingAfterFirstUser' => fn(ParseNode $n) => $o->setDisableUserStatusTrackingAfterFirstUser($n->getBooleanValue()),
            'installProgressTimeoutInMinutes' => fn(ParseNode $n) => $o->setInstallProgressTimeoutInMinutes($n->getIntegerValue()),
            'installQualityUpdates' => fn(ParseNode $n) => $o->setInstallQualityUpdates($n->getBooleanValue()),
            'selectedMobileAppIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSelectedMobileAppIds($val);
            },
            'showInstallationProgress' => fn(ParseNode $n) => $o->setShowInstallationProgress($n->getBooleanValue()),
            'trackInstallProgressForAutopilotOnly' => fn(ParseNode $n) => $o->setTrackInstallProgressForAutopilotOnly($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the installProgressTimeoutInMinutes property value. The installation progress timeout in minutes. Default is 60 minutes.
     * @return int|null
    */
    public function getInstallProgressTimeoutInMinutes(): ?int {
        $val = $this->getBackingStore()->get('installProgressTimeoutInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installProgressTimeoutInMinutes'");
    }

    /**
     * Gets the installQualityUpdates property value. Allows quality updates installation during OOBE
     * @return bool|null
    */
    public function getInstallQualityUpdates(): ?bool {
        $val = $this->getBackingStore()->get('installQualityUpdates');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installQualityUpdates'");
    }

    /**
     * Gets the selectedMobileAppIds property value. Selected applications to track the installation status. It is in the form of an array of GUIDs.
     * @return array<string>|null
    */
    public function getSelectedMobileAppIds(): ?array {
        $val = $this->getBackingStore()->get('selectedMobileAppIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selectedMobileAppIds'");
    }

    /**
     * Gets the showInstallationProgress property value. When TRUE, shows installation progress to user. When false, hides installation progress. The default is false.
     * @return bool|null
    */
    public function getShowInstallationProgress(): ?bool {
        $val = $this->getBackingStore()->get('showInstallationProgress');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showInstallationProgress'");
    }

    /**
     * Gets the trackInstallProgressForAutopilotOnly property value. When TRUE, installation progress is tracked for only Autopilot enrollment scenarios. When false, other scenarios are tracked as well. The default is false.
     * @return bool|null
    */
    public function getTrackInstallProgressForAutopilotOnly(): ?bool {
        $val = $this->getBackingStore()->get('trackInstallProgressForAutopilotOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trackInstallProgressForAutopilotOnly'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDeviceResetOnInstallFailure', $this->getAllowDeviceResetOnInstallFailure());
        $writer->writeBooleanValue('allowDeviceUseOnInstallFailure', $this->getAllowDeviceUseOnInstallFailure());
        $writer->writeBooleanValue('allowLogCollectionOnInstallFailure', $this->getAllowLogCollectionOnInstallFailure());
        $writer->writeBooleanValue('allowNonBlockingAppInstallation', $this->getAllowNonBlockingAppInstallation());
        $writer->writeBooleanValue('blockDeviceSetupRetryByUser', $this->getBlockDeviceSetupRetryByUser());
        $writer->writeStringValue('customErrorMessage', $this->getCustomErrorMessage());
        $writer->writeBooleanValue('disableUserStatusTrackingAfterFirstUser', $this->getDisableUserStatusTrackingAfterFirstUser());
        $writer->writeIntegerValue('installProgressTimeoutInMinutes', $this->getInstallProgressTimeoutInMinutes());
        $writer->writeBooleanValue('installQualityUpdates', $this->getInstallQualityUpdates());
        $writer->writeCollectionOfPrimitiveValues('selectedMobileAppIds', $this->getSelectedMobileAppIds());
        $writer->writeBooleanValue('showInstallationProgress', $this->getShowInstallationProgress());
        $writer->writeBooleanValue('trackInstallProgressForAutopilotOnly', $this->getTrackInstallProgressForAutopilotOnly());
    }

    /**
     * Sets the allowDeviceResetOnInstallFailure property value. When TRUE, allows device reset on installation failure. When false, reset is blocked. The default is false.
     * @param bool|null $value Value to set for the allowDeviceResetOnInstallFailure property.
    */
    public function setAllowDeviceResetOnInstallFailure(?bool $value): void {
        $this->getBackingStore()->set('allowDeviceResetOnInstallFailure', $value);
    }

    /**
     * Sets the allowDeviceUseOnInstallFailure property value. When TRUE, allows the user to continue using the device on installation failure. When false, blocks the user on installation failure. The default is false.
     * @param bool|null $value Value to set for the allowDeviceUseOnInstallFailure property.
    */
    public function setAllowDeviceUseOnInstallFailure(?bool $value): void {
        $this->getBackingStore()->set('allowDeviceUseOnInstallFailure', $value);
    }

    /**
     * Sets the allowLogCollectionOnInstallFailure property value. When TRUE, allows log collection on installation failure. When false, log collection is not allowed. The default is false.
     * @param bool|null $value Value to set for the allowLogCollectionOnInstallFailure property.
    */
    public function setAllowLogCollectionOnInstallFailure(?bool $value): void {
        $this->getBackingStore()->set('allowLogCollectionOnInstallFailure', $value);
    }

    /**
     * Sets the allowNonBlockingAppInstallation property value. When TRUE, ESP (Enrollment Status Page) installs all required apps targeted during technician phase and ignores any failures for non-blocking apps. When FALSE, ESP fails on any error during app install. The default is false.
     * @param bool|null $value Value to set for the allowNonBlockingAppInstallation property.
    */
    public function setAllowNonBlockingAppInstallation(?bool $value): void {
        $this->getBackingStore()->set('allowNonBlockingAppInstallation', $value);
    }

    /**
     * Sets the blockDeviceSetupRetryByUser property value. When TRUE, blocks user from retrying the setup on installation failure. When false, user is allowed to retry. The default is false.
     * @param bool|null $value Value to set for the blockDeviceSetupRetryByUser property.
    */
    public function setBlockDeviceSetupRetryByUser(?bool $value): void {
        $this->getBackingStore()->set('blockDeviceSetupRetryByUser', $value);
    }

    /**
     * Sets the customErrorMessage property value. The custom error message to show upon installation failure. Max length is 10000. example: 'Setup could not be completed. Please try again or contact your support person for help.'
     * @param string|null $value Value to set for the customErrorMessage property.
    */
    public function setCustomErrorMessage(?string $value): void {
        $this->getBackingStore()->set('customErrorMessage', $value);
    }

    /**
     * Sets the disableUserStatusTrackingAfterFirstUser property value. When TRUE, disables showing installation progress for first user post enrollment. When false, enables showing progress. The default is false.
     * @param bool|null $value Value to set for the disableUserStatusTrackingAfterFirstUser property.
    */
    public function setDisableUserStatusTrackingAfterFirstUser(?bool $value): void {
        $this->getBackingStore()->set('disableUserStatusTrackingAfterFirstUser', $value);
    }

    /**
     * Sets the installProgressTimeoutInMinutes property value. The installation progress timeout in minutes. Default is 60 minutes.
     * @param int|null $value Value to set for the installProgressTimeoutInMinutes property.
    */
    public function setInstallProgressTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('installProgressTimeoutInMinutes', $value);
    }

    /**
     * Sets the installQualityUpdates property value. Allows quality updates installation during OOBE
     * @param bool|null $value Value to set for the installQualityUpdates property.
    */
    public function setInstallQualityUpdates(?bool $value): void {
        $this->getBackingStore()->set('installQualityUpdates', $value);
    }

    /**
     * Sets the selectedMobileAppIds property value. Selected applications to track the installation status. It is in the form of an array of GUIDs.
     * @param array<string>|null $value Value to set for the selectedMobileAppIds property.
    */
    public function setSelectedMobileAppIds(?array $value): void {
        $this->getBackingStore()->set('selectedMobileAppIds', $value);
    }

    /**
     * Sets the showInstallationProgress property value. When TRUE, shows installation progress to user. When false, hides installation progress. The default is false.
     * @param bool|null $value Value to set for the showInstallationProgress property.
    */
    public function setShowInstallationProgress(?bool $value): void {
        $this->getBackingStore()->set('showInstallationProgress', $value);
    }

    /**
     * Sets the trackInstallProgressForAutopilotOnly property value. When TRUE, installation progress is tracked for only Autopilot enrollment scenarios. When false, other scenarios are tracked as well. The default is false.
     * @param bool|null $value Value to set for the trackInstallProgressForAutopilotOnly property.
    */
    public function setTrackInstallProgressForAutopilotOnly(?bool $value): void {
        $this->getBackingStore()->set('trackInstallProgressForAutopilotOnly', $value);
    }

}
